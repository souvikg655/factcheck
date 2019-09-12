<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->model('home_model');

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

        $home_id = $this->input->post('home_id');
        $email_id = $this->input->post('email_id');

        $response = $this->home_model->mail_details($home_id);

        $title = $response[0]->title;
        $bedroom = $response[0]->bedroom;
        $bathroom = $response[0]->bathroom;
        $type = $response[0]->type;
        $age = $response[0]->age;
        $area = $response[0]->area;
        $beside_road = $response[0]->beside_road;
        $country = $response[0]->country;
        $city = $response[0]->city;
        $street_no = $response[0]->street_no;
        $street_name = $response[0]->street_name;
        $province = $response[0]->province;
        $postal = $response[0]->postal;
        $house_no = $response[0]->house_no;
        $municipality_name = $response[0]->municipality_name;

        $municipality_paper = $response[0]->municipality_paper;


        $message = '<!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        </head>
        <body>
        <table width="600" align="center" bgcolor="#fff" cellpadding="0" cellspacing="0" border="0"  style="font-family: \'Arial\', sans-serif; border:1px solid #000;">
        <tr>
        <td valign="top" align="center" style="background-color: #fff; text-align: center; padding: 15px;">
        <img src="images/logo.png" alt="">
        </td>
        </tr>
        <tr>
        <td valign="top" align="center" style="padding: 0px 20px 20px; font-size: 20px; line-height: 30px; color: #333; font-style: italic; text-align: center;">
        Your sreach is successful and here is the details of the house you have search.
        </td>
        </tr>
        <tr>
        <td style="background-color: #f9f9f9;">
        <table width="570" align="center" bgcolor="" cellpadding="0" cellspacing="0" border="0" style="padding: 0px 15px;">
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Title
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$title.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Total bedrooms
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$bedroom.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Total bathrooms
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$bathroom.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        property type
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$type.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        age of house (year)
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$age.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Area (sf)
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$area.' 
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Beside road
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$beside_road.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Country
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$country.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        City
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$city.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Street Number
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$street_no.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Street Name
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$street_name.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        state / province
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$province.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Postal code
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$postal.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left; border-bottom: 1px solid #ddd;">
        Postal code
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right; border-bottom: 1px solid #ddd;">
        '.$house_no.'
        </td>
        </tr>
        <tr>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #07b1e9; text-transform: capitalize; text-align: left;">
        Municipality Name
        </td>
        <td valign="top" style="padding: 10px 0px; font-size: 16px; line-height: 22px; color: #333; text-transform: capitalize; text-align: right;">
        '.$municipality_name.'
        </td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
        <td valign="top" align="center" style="font-size: 12px; line-height: 18px; color: #666; padding: 20px 0px 0px;">
        To contact us please visit
        </td>
        </tr>
        <tr>
        <td valign="top" align="center" style="padding: 0px 0px 20px;">
        <a href="javascript:void(0);" style="font-size: 12px; line-height: 18px; color: #0d81d0;">support@factcheck.com</a>
        </td>
        </tr>
        </table>
        </body>
        </html>';

        
        $this->email->from('souvikg653@gmail.com', 'Factcheck');
        $this->email->to($email_id); 

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

?>