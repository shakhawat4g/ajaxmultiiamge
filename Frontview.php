<?php


/** 
 * @Company Flick Media Ltd
 * @Developer Khairul Azam
 * Update on: 19th Dec 2022
 */
class Frontview extends Frontend_controller
{
    private $gs = [];

    //put your code here
    function __construct()
    {
        parent::__construct();
        $this->load->model('Registration_model');
        $this->load->helper('registration/registration');
    }
    
    
    public function registration() {
        $id = 35;
        $data = $this->db->get_where('registration',['id'=>$id])->row();
        // dd($data);
        // $this->load->view('frontview/pdf',$data);

        $this->viewFrontContent('frontview/registration',[],'registration');
    }
    public function registration_action() {
        ajaxAuthorized();
        $ip_address = $this->input->ip_address();
        $post = $this->input->post('registration');
        $case_no = 'UKSSI-'.time().rand(10,99);
        $target_pictures = $_FILES['target_picture'];

        // dd($target_pictures['name']);
        // pp(json_encode($target_pictures['name']));
        // dd($post['target_apperance']);

        $file_path = 'uploads/target_picture/' .$case_no.'/';

        $signature = $_POST['signature'];
        $saveTemp = 'uploads/target_picture/signature.png';        
        file_put_contents($saveTemp, file_get_contents($signature));

        $signature   = uploadPhoto($saveTemp, $file_path, 'signature');
        removeImage($saveTemp);

        $this->uploadFile( $target_pictures, $file_path );

        if($target_pictures['name']){
            foreach ($target_pictures['name'] as $key => $value){
                $target_photo[] = $file_path.$value;
            }
            $target_photo = implode(',',$target_photo);
        }
        

        
        $data = [
            'case_no'	=> $case_no,
            'date'	=> date('Y-m-d'),
            'name'	=> $post['name'],
            'gender'	=> $post['gender'],
            'date_of_birth'	=> $post['date_of_birth'],
            'address'	=> $post['address'],
            'post_code'	=> $post['post_code'],
            'phone_number'	=> $post['phone_number'],
            'mobile_number'	=> $post['mobile_number'],
            'email'	=> $post['email'],
            'time_of_contact'	=> $post['time_of_contact'],
            'method_of_contact'	=> $post['method_of_contact'],
            'target_name'	=> $post['target_name'],
            'target_apperance'	=> json_encode($post['target_apperance']),
            'target_picture'	=> $target_photo,
            'target_address'	=> $post['target_address'],
            'target_date_of_birth'	=> $post['target_date_of_birth'],
            'target_ni_no'	=> $post['target_ni_no'],
            'target_passport_no'	=> $post['target_passport_no'],
            'target_phone_number'	=> $post['target_phone_number'],
            'target_mobile_number'	=> $post['target_mobile_number'],
            'target_email '	=> $post['target_email'],
            'target_occuption'	=> $post['target_occuption'],
            'target_employer_name'	=> $post['target_employer_name'],
            'target_work_address'	=> $post['target_work_address'],
            'target_work_phone_number'	=> $post['target_work_phone_number'],
            'target_work_email'	=> $post['target_work_email'],
            'vechile_type'	=> $post['vechile_type'],
            'vechile_make'	=> $post['vechile_make'],
            'vechile_model'	=> $post['vechile_model'],
            'vechile_reg_no'	=> $post['vechile_reg_no'],
            'terms_accept'	=> $post['terms_accept'],
            'data_protection_accept'	=> $post['data_protection_accept'],
            'signature'	=> $signature,
            'ip_address' => $ip_address,
            'created_at' => date('Y-m-d H:i:s')

        ];


        // dd($data);
        $id = $this->Registration_model->insert($data);

        echo ajaxRespond('OK','Thank you for submitting your Information. We will contact you ASAP.');

        
    }

    private function uploadFile( $attachments, $file_path ){
        // $path           = "uploads/target_picture/{$reg_id}";

        foreach($attachments['name'] as $index => $attach ){            
            $single_file = [
                'name' => $attach,
                'tmp_name' => $attachments['tmp_name'][$index],
                'size' => $attachments['size'][$index],
                'error' => $attachments['error'][$index],
                'type' => $attachments['type'][$index]
            ];
            $this->uploadAttach($single_file, $file_path );
                   
        }       
    }

    private function uploadAttach($File, $path = './uploads/', $name = 'auto'){

    $handle = new \Verot\Upload\Upload($File);

    $full_path = '';
    // $handle->file_new_name_body = ($name == 'auto') ? uniqid() : $name;

    if ($handle->uploaded) {
        $handle->process($path);
        if ($handle->processed) {
            $full_path = stripslashes($handle->file_dst_pathname);
            $handle->clean();
        }
    }
    return $full_path;
    }
    

}
