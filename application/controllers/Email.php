<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->model('home_model');
        $this->load->model('email_model');

	}

    public function mail(){
        $this->load->view('email_template');
    }


    public function send_email()
    {	
      $this->load->library('email');
      $config = Array(
         'protocol' => 'smtp',
         'smtp_host' => 'ssl://smtp.gmail.com',
         'smtp_port' => '465',
         'smtp_timeout' => '7',
         'smtp_user' => 'souvikg653@gmail.com',
         'smtp_pass' => 'ambxglpimsdsidyu',
         'mailtype'  => 'html', 
         'charset'   => 'utf-8',
         'newline' => "\r\n",
         'validation' => True
     );
      $this->email->initialize($config);

      $mail_id = $this->input->post('mail_id');
      $value = json_decode($this->input->post('value'));


      for ($i=0; $i <count($value->value); $i++) {

        $home_id = $value->value[$i]->id;

        $country = $value->value[$i]->country;
        $municipality_name = $value->value[$i]->municipality_name;

        $province = $value->value[$i]->province;
        $city = $value->value[$i]->city;
        $postal = $value->value[$i]->postal;
        $house_no = $value->value[$i]->house_no;
        $street_no = $value->value[$i]->street_no;
        $street_name = $value->value[$i]->street_name;

        $bedroom = $value->value[$i]->bedroom;
        $bathroom = $value->value[$i]->bathroom;
        $property_type = $value->value[$i]->type;
        $age_of_house = $value->value[$i]->age;
        $area = $value->value[$i]->area;
        $beside_road = $value->value[$i]->beside_road;
        $availability = $value->value[$i]->availability;
        $sale_or_lease = $value->value[$i]->sale_lease;
        $street_abbr = $value->value[$i]->street_abbr;

        $image_array = $this->email_model->get_images_by_id($home_id);
        $first_image = $image_array[0]->image;

        $municipality_paper = $value->value[$i]->municipality_paper;

        


        $message = '<!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        </head>
        <body>
        <table width="600" align="center" bgcolor="white" cellpadding="0" cellspacing="0" border="0"  style="font-family: \'Arial\', sans-serif; border:1px solid #000; padding: 10px;">
        <tbody>
        <tr>
        <td>
        <table width="578" align="center" bgcolor="white" cellpadding="0" cellspacing="0" border="0"  style="border:1px solid #000; padding: 10px;">
        <tr>
        <td valign="top">
        <table width="556" bgcolor="white" cellpadding="0" cellspacing="0" border="0">
        <tr>
        <td valign="top" style="padding-bottom: 5px;">
        <img src="<?php echo base_url()?>home_images/'.$first_image.'" alt="" style="width: 100%; max-width: 200px; display: block;">
        </td>
        <td valign="top">
        <table width="356" cellpadding="0" cellspacing="0" border="0" style="padding-left: 20px;">
        <tr>
        <td valign="top" colspan="2" style="font-size: 16px; line-height: 22px; font-weight: bold; text-transform: capitalize; border-bottom: 1px solid #333; padding: 5px 0px;">
        Location
        </td>
        </tr>
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>Area:&nbsp;</strong>'.$country.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>Munucipality name:&nbsp;</strong>'.$municipality_name.'</td>
        </tr>
        <tr>
        <td valign="top" colspan="2" style="font-size: 16px; line-height: 22px; font-weight: bold; text-transform: capitalize; border-bottom: 1px solid #333; padding: 5px 0px;">
        Address
        </td>
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>Province:&nbsp;</strong>'.$province.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>City:&nbsp;</strong>'.$city.'</td>
        </tr>
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>postal code:&nbsp;</strong>'.$postal.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>house number:&nbsp;</strong>'.$house_no.'</td>
        </tr>
        <tr>console.log
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>street number:&nbsp;</strong>'.$street_no.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>street name:&nbsp;</strong>'.$street_name.'</td>
        </tr>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
        <td valign="top" style="font-size: 16px; line-height: 22px; font-weight: bold; border-bottom: 1px solid #333; padding: 5px 0px; text-transform: capitalize;">
        House Details
        </td>
        </tr>
        <tr>
        <td>
        <table width="556" cellpadding="0" cellspacing="0" border="0">
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>bedrooms:&nbsp;</strong>'.$bedroom.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>bathrooms:&nbsp;</strong>'.$bathroom.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>property type:&nbsp;</strong>'.$property_type.'</td>
        </tr>
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>age of house:&nbsp;</strong>'.$age_of_house.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>area(sqft):&nbsp;</strong>'.$area.' sqft</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>beside road:&nbsp;</strong>'.$beside_road.'</td>
        </tr>
        <tr>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>availability:&nbsp;</strong>'.$availability.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>sale or lease:&nbsp;</strong>'.$sale_or_lease.'</td>
        <td valign="top" style="font-size: 13px; line-height: 20px; color: #333; text-transform: capitalize; padding: 5px;"><strong>street abbr:&nbsp;</strong>'.$street_abbr.'</td>
        </tr>
        </table>
        </td>
        </tr>

        </table>
        </td>
        </tr>

        </tbody>
        </table>
        </body>
        </html>';

        $this->email->from('souvikg653@gmail.com', 'Factcheck');
        $this->email->to($mail_id); 
        $this->email->subject("Factcheck Search Result");
        $this->email->message($message);

        $pdf_link = base_url()."municipality_papers/".$municipality_paper;
        $this->email->attach($pdf_link);

        $result = $this->email->send();
        if($result == 1){
            $res['status'] = True;
            $res['message'] = "Mail send successful";
        }else{
            $res['status'] = False;
            $res['message'] = "Mail not send successful";
        }
        echo (json_encode($res));

    }
}
}
?>