<!DOCTYPE html PUBLIC>
<html xmlns="www.e-health.com" lang="en-GB">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Pesanan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    a[x-apple-data-detectors] {color: inherit !important;}
  </style>

</head>
<body style="margin: 0; padding: 0;">
  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td style="padding: 20px 0 30px 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
  <tr>
    <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
      <img src="https://assets.codepen.io/210284/h1_1.gif" alt="Creating Email Magic." width="300" height="230" style="display: block;" />
    </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif;">
            <h1 style="font-size: 24px; margin: 0;">Hi , {{ $order->customer->name }} </h1>
          </td>
        </tr>
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
            <p style="margin: 0;">Terimakasih Telah memesan di E-health , pesanan anda dengan nomor invoice : <strong>{{ $order->invoice }}</strong> telah kami kirim dan berikut merupakan nomor resi pemesanan anda : <strong>{{ $order->tracking_number }}</strong> </p>
        <br><br>
			<p style="margin: 0;">
				Re: Admin E-Health (Email auto dont reply this message)
			</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="lightblue" style="padding: 30px 30px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
            <p style="margin: 0;">&reg; Admin : E-Health.co.id<br/>
          </td>
          <td align="right">
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
              <tr>
                <td>
                  <a href="http://www.twitter.com/">
                    <img src="#" alt="Twitter." width="38" height="38" style="display: block;" border="0" />
                  </a>
                </td>
                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                <td>
                  <a href="http://www.twitter.com/">
                    <img src="#" alt="Facebook." width="38" height="38" style="display: block;" border="0" />
                  </a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

      </td>
    </tr>
  </table>
</body>
</html>