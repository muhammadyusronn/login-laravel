<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
        <head> 
        <meta charset='UTF-8'> 
        <meta content='width=device-width, initial-scale=1' name='viewport'> 
        <meta name='x-apple-disable-message-reformatting'> 
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
        <meta content='telephone=no' name='format-detection'> 
        <title>Email Validatation</title> 
        <!--[if (mso 16)]>
            <style type='text/css'>
            a {text-decoration: none;}
            </style>
            <![endif]--> 
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
        <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]--> 
        <style type='text/css'>
        #outlook a {
            padding:0;
        }
        .ExternalClass {
            width:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height:100%;
        }
        .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
        }
        .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
        }
        .es-button-border:hover a.es-button {
            background:#ffffff!important;
            border-color:#ffffff!important;
        }
        .es-button-border:hover {
            background:#ffffff!important;
            border-style:solid solid solid solid!important;
            border-color:#3d5ca3 #3d5ca3 #3d5ca3 #3d5ca3!important;
        }
        @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:20px!important; text-align:center; line-height:120%!important } h2 { font-size:16px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:20px!important } h2 a { font-size:16px!important; text-align:left } h3 a { font-size:20px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:10px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:14px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
        </style> 
        </head> 
        <body style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
        <div class='es-wrapper-color' style='background-color:#FAFAFA'> 
        <!--[if gte mso 9]>
                    <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                        <v:fill type='tile' color='#fafafa'></v:fill>
                    </v:background>
                <![endif]--> 
        <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'> 
            <tr style='border-collapse:collapse'> 
            <td valign='top' style='padding:0;Margin:0'> 
            <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                <tr style='border-collapse:collapse'> 
                <td class='es-adaptive' align='center' style='padding:0;Margin:0'> 
                <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
                    <tr style='border-collapse:collapse'> 
                    <td align='left' style='padding:10px;Margin:0'> 
                    <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr style='border-collapse:collapse'> 
                        <td valign='top' align='center' style='padding:0;Margin:0;width:580px'> 
                        <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr style='border-collapse:collapse'> 
                            <td align='center' class='es-infoblock' style='padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:14px;color:#CCCCCC'>Kampus Indonesia</p></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
                <tr style='border-collapse:collapse'> 
                <td class='es-adaptive' align='center' style='padding:0;Margin:0'> 
                <table class='es-header-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#3D5CA3;width:600px' cellspacing='0' cellpadding='0' bgcolor='#3d5ca3' align='center'> 
                    <tr style='border-collapse:collapse'> 
                    <td style='Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:rgb(241,157,58)' bgcolor='#3d5ca3' align='left'> 
                    <!--[if mso]><table style='width:560px' cellpadding='0' 
                                cellspacing='0'><tr><td style='width:270px' valign='top'><![endif]--> 
                    <table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                        <tr style='border-collapse:collapse'> 
                        <td class='es-m-p20b' align='left' style='padding:0;Margin:0;width:270px'> 
                        <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr style='border-collapse:collapse'> 
                            <td align='left' style='padding:0;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#333333'><br></p></td> 
                            </tr> 
                            <tr style='border-collapse:collapse'> 
                            <td align='center' style='padding:0;Margin:0;font-size:0px'><img class='adapt-img' src='http://assets.stickpng.com/images/580b57fcd9996e24bc43c545.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='90'></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table> 
                    <!--[if mso]></td><td style='width:20px'></td><td style='width:270px' valign='top'><![endif]--> 
                    <table class='es-right' cellspacing='0' cellpadding='0' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right'> 
                        <tr style='border-collapse:collapse'> 
                        <td align='left' style='padding:0;Margin:0;width:270px'> 
                        <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr style='border-collapse:collapse'> 
                            <td align='center' style='padding:0;Margin:0;display:none'></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table> 
                    <!--[if mso]></td></tr></table><![endif]--></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table> 
            <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                <tr style='border-collapse:collapse'> 
                <td style='padding:0;Margin:0;background-color:#FAFAFA' bgcolor='#fafafa' align='center'> 
                <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'> 
                    <tr style='border-collapse:collapse'> 
                    <td style='padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-top:40px;background-color:transparent;background-position:left top' bgcolor='transparent' align='left'> 
                    <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr style='border-collapse:collapse'> 
                        <td valign='top' align='center' style='padding:0;Margin:0;width:560px'> 
                        <table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left top' width='100%' cellspacing='0' cellpadding='0' role='presentation'> 
                            
                            <tr style='border-collapse:collapse'> 
                            <td align='center' style='padding:0;Margin:0;padding-top:25px;padding-left:40px;padding-right:40px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666'>Hello {{$name}} <br></p>
                            <span style="font-size: 12px; line-height: 1.5; color: #333333;">

                            We have sent you this email in response to your request to reset your password on yourwebsite.com. After you reset your password, any credit card information stored in My Account will be deleted as a security measure.
                            <br/><br/>
                            To reset your password, please click this link : <a href="#" onclick="javascript: return alert('Fitur belum tersedia')">www.your_url_reset_password.com</a>
                            <br/><br/>
                            We recommend that you keep your password secure and not share it with anyone.
                            <br/><br/>
                        </span>
                            </td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                    <tr style='border-collapse:collapse'> 
                    <td style='padding:0;Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;background-position:center center' align='left'> 
                    <!--[if mso]><table style='width:580px' cellpadding='0' cellspacing='0'><tr><td style='width:199px' valign='top'><![endif]--> 
                    <table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                        <tr style='border-collapse:collapse'> 
                        <td align='left' style='padding:0;Margin:0;width:199px'> 
                        <table style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center center' width='100%' cellspacing='0' cellpadding='0'> 
                            <tr style='border-collapse:collapse'> 
                            <td align='center' style='padding:0;Margin:0;display:none'></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table> 
                    <!--[if mso]></td><td style='width:20px'></td><td style='width:361px' valign='top'><![endif]--> 
                    <!--[if mso]></td></tr></table><![endif]--></td> 
                    </tr> 
                </table>
                </td> 
             </tr> 
            </table> 
            <table class='es-footer' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
                <tr style='border-collapse:collapse'> 
                <td style='padding:0;Margin:0;background-color:#FAFAFA' bgcolor='#fafafa' align='center'> 
                <table class='es-footer-body' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
                    <tr style='border-collapse:collapse'> 
                    <td style='Margin:0;padding-top:10px;padding-left:20px;padding-right:20px;padding-bottom:30px;background-color:rgb(241,157,58);background-position:left top' bgcolor='#0b5394' align='left'> 
                    <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                        <tr style='border-collapse:collapse'> 
                        <td valign='top' align='center' style='padding:0;Margin:0;width:560px'> 
                        <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                            <tr style='border-collapse:collapse'> 
                            <td align='left' style='padding:0;Margin:0;padding-top:5px;padding-bottom:5px'><h2 style='Margin:0;line-height:19px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:16px;font-style:normal;font-weight:normal;color:#FFFFFF'><strong>Have quastions?</strong></h2></td> 
                            </tr> 
                            <tr style='border-collapse:collapse'> 
                            <td align='left' style='padding:0;Margin:0;padding-bottom:5px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:21px;color:#FFFFFF'><a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:14px;text-decoration:none;color:#FFFFFF' href=''>contact us</a><br>emailcustomerservice@gmail.com, or call 082186427585 customer service</p></td> 
                            </tr> 
                        </table></td> 
                        </tr> 
                    </table></td> 
                    </tr> 
                </table></td> 
                </tr> 
            </table></td> 
            </tr> 
        </table> 
        </div>  
        </body>
        </html>