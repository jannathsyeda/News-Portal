<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     

     
class Item extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("items", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("items")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     *Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        
         
        $this->db->insert('items',$input);

      $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	



function image_upload()
{
header('access_Control-Allow-Origin:*');

if($_FILE){
    $image_name1="";
    $image_name_thumb1="";


  //upload job picture
    $random=time();
    $config['upload_path']="upload/";
    $config['allow_types']='*';
    $config['file_name']=$random;
    $config['encrypt_name']=TRUE;
    $this->load->library('Image_lib');
    $this->Image_lib->clear();
    $this->load->library('upload',$config);
    $this->load->initialize($config);

    ini_set('upload_maz_filesize','6644');
    ini_set('memory_limit','-1');

    if($this->upload->do_upload('image_url'))
    {

        $imageArray=$this->upload->date();
    
    $image_name1= $imageArray['raw_name'].''.$imageArray['file_ext'];
    $config['image_library']='gd2';
        $config['source_image']="upload/".$image_name1;
            $config['maintain_ratio']=TRUE;
            $config['width']=3300;
          $config['height']=3377;


$this->load->library('Image_lib',$config);
$this->image_lib->initialize($config);
$this->image_lib->resize();
$this->image_lib->clear();

$image_name_thumb1=$imageArray['raw_name'].'thumb'.$imageArray['file_ext'];

$addcard=array('image_url'=>$image_name_thumn1);
$this->load->model('image_model');
$this->image_model->insertttt($addcard);



}    
}

}




}

/*
public function upload_img()
    {
$image = base64_decode($this->input->post("image_url"));
$image_name = md5(uniqid(rand(), true));
$filename = $image_name . '.' . 'png';
//rename file name with random number
$path = "./upload/".$filename;
//image uploading folder path
file_put_contents($path . $filename, $image);
// image is bind and upload to respective folde

$data_insert = array('image_url'=>$filename);
var_dump($data_insert);

$success = $this->model->insert_img($data_insert);
if($success){
    $b = "User Registered Successfully..";
}
else
{
    $b = "Some Error Occured. Please Try Again..";
}
echo json_encode($b);
}

*/



