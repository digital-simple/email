<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <title>Document</title>
</head>
<body>
    <?php 
        if (have_rows('staffs')):
            while (have_rows('staffs')):
                the_row();
    ?>
    <table style="font-family: Helvetica, Arial, sans-serif; border-collapse: collapse; font-size:13px; color:black;">
        <tr>
            <td rowspan="11" style="vertical-align:top">
                <img src="<?php the_sub_field('photo') ?>" width="152">
            </td>
            <td rowspan="11" style="width:25px"></td>
        </tr>
        <tr>
            <td colspan="4"
                style="font-weight: 600; font-size: 20px; color:#00A9D3; line-height: 20px; vertical-align: bottom;">
                <?php the_sub_field('name') ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" height="20" style="line-height: 20px;">            
                <span>
                    <?php the_sub_field('job_title') ?>
                </span>  
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-line-1.jpg'); ?>" alt="" width="2" height="12">
                  <span>
                    <?php the_sub_field('office') ?>
                </span>            
            </td>
        </tr>         
        <tr>
            <td colspan="5" height="18">
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-line-2.jpg'); ?>" alt="" width="430"
                    height="2" style="vertical-align: super;">
            </td>
        </tr>
        <tr>
            <td height="20">
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-icon-1.jpg'); ?>" width="18">
            </td>
            <td>
                <a href="tel:<?php the_sub_field('mobile') ?>" style="color:black; text-decoration: none;">
                    <?php the_sub_field('mobile') ?>
                </a>
            </td>
            <td width="25" height="20">
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-icon-2.jpg'); ?>" width="18">
            </td>
            <td width="180">
                <a href="tel:0800776777" style="color:black; text-decoration: none;">
                    <?php the_field('company_phone') ?>
                </a>
            </td>
            <td rowspan="4" style="vertical-align:bottom" align="right">
                <img src="<?php the_field('logo') ?>" alt="" width="83">
            </td>
        </tr>
        <tr>
            <td width="28" height="20">
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-icon-4.jpg'); ?>" width="18">
            </td>
            <td colspan="3">
                <a href="mailto:stuart@latitudehomes.co.nz" style="color:black; text-decoration: none;" target="_blank">
                    <?php the_sub_field('email') ?>
                </a>
            </td>
        </tr>
        <tr>
            <td style="height:2px"></td>
        </tr>
        <tr>
            <td style="width:28px; vertical-align: top;">
                <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-icon-3.jpg'); ?>" width="18">
            </td>
            <td colspan="3" style="height:22px; vertical-align: top; ">
                <?php the_field('address') ?>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <a href="<?php the_field('facebook') ?>" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-social-1.jpg'); ?>" alt="" width="28">
                </a>
                <a href="<?php the_field('instagram') ?>" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-social-2.jpg'); ?>" alt="" width="28">
                </a>
                <a href="<?php the_field('linked_in') ?>" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-social-3.jpg'); ?>" alt="" width="28">
                </a>
                <a href="<?php the_field('website') ?>" target="_blank" style="text-decoration: none;">
                    <img src="<?php echo home_url('/wp-content/uploads/2023/09/lh-social-4.jpg'); ?>" alt="" width="28">
                </a>
            </td>
            <td colspan="2" align="right" height="80">
                <img src="<?php the_field('awards') ?>" height="45">
            </td>
        </tr>
    </table>
    <?php endwhile; endif; ?>
    
    
        
    
    <!-- <table style="font-family: Helvetica, Arial, sans-serif; border-collapse: collapse; font-size:13px; color:black;">
        <tr>
            <td rowspan="11">
                <img src="https://drive.google.com/uc?id=1jO_CSOpXD3RvaDdoE77FUwaJvUs2eURR" width="200">
            </td>
            <td rowspan="11" style="width:25px"></td>
        </tr>
        <tr>
            <td colspan="4"
                style="font-weight: 600; font-size: 20px; color:#00A9D3; line-height: 20px; vertical-align: bottom;">
                Stuart Humphrey</td>
        </tr>
        <tr>
            <td colspan="5" height="20" style="line-height: 20px;">            
                <span>General Manager  </span>
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-line.png" alt="" width="2" height="14">
                <span>  National Support Office</span>            
            </td>
        </tr>  
        <tr>
            <td colspan="5" style="font-size: 11px;">
                Show Home - 109 Wairau Drive, Tikipunga, Whangarei 0112
            </td>
        </tr>
        <tr>
            <td colspan="5" height="10">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-underline.png" alt="" width="430"
                    height="2" style="vertical-align: super;">
            </td>
        </tr>    
        <tr>
            <td width="24" height="20">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-i-1.png" width="18">
            </td>
            <td>
                <a href="tel:0212869007" style="color:black; text-decoration: none;"><span>021 2869 007</span></a>
            </td>
            <td width="24" height="20">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-i-2.png" width="18">
            </td>
            <td width="180">
                <a href="tel:0800776777" style="color:black; text-decoration: none;">0800 776 777</a>
            </td>
            <td rowspan="4" style="vertical-align:bottom" align="right">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-logo.png" alt="" width="83">
            </td>
        </tr>
        <tr>
            <td width="24" height="20">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-i-mail.png" width="18">
            </td>
            <td colspan="3">
                <a href="mailto:stuart@latitudehomes.co.nz" style="color:black; text-decoration: none;"
                    target="_blank">stuart@latitudehomes.co.nz</a>
            </td>
        </tr>
        <tr>
            <td height="2"></td>
        </tr>
        <tr>
            <td width="24" style="vertical-align: top;">
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-i-4.png" width="18">
            </td>
            <td colspan="3" style="height:22px; vertical-align: top; ">
                Unit H, Building 3, <br>
                195 Main Highway, Ellerslie, Auckland
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <a href="https://www.facebook.com/latitudehomesnz/" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-social-2.png" alt="" width="28">
                </a>
                <a href="https://www.instagram.com/latitudehomes/" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-social-1.png" alt="" width="28">
                </a>
                <a href="https://nz.linkedin.com/company/latitude-homes-nz" target="_blank"
                    style="width:35px; display: inline-block; text-decoration: none;">
                    <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-social-3.png" alt="" width="28">
                </a>
                <a href="https://www.latitudehomes.co.nz/" target="_blank" style="text-decoration: none;">
                    <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-social-4.png" alt="" width="28">
                </a>
            </td>
            <td>
                <img src="https://digitalsimple.co.nz/wp-content/uploads/2023/09/lati-mb.png" height="45">
            </td>
        </tr>
    </table> -->
</body>
</html>