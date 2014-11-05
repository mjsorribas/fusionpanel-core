<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_SERVER['HTTP_HOST'] . " is parked...."; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="data:image/icon;base64,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">
        <style>
            html {
                height: 80%;
            }
            body {
                text-align:left;
                height:100%;
                background: #F3F3F3;
                font-size: 62.5%;
                font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif;
                margin-top:10px;
                margin-bottom:10px;
                margin-right:10px;
                margin-left:10px;
                padding:0px;
            }
            body,td,th {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 9pt;
                color: #333333;
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: Geneva, Arial, Helvetica, sans-serif;
            }
            h1 {
                font-size: 28px;
                font-weight:bold;
                color: #336;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            a:link,a:visited,a:hover,a:active {
                color: #336;
                text-decoration:none;
            }
            ol{
                color:#336;
                font-size: 24px;
                font-weight:bold;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            ol p{
                color:#CCCCCC;
                font: normal 12pt Verdana, Arial, Helvetica, sans-serif;
                color: #333333;
            }
            .content{
                background:#F1F4F6;
                background: #F1F4F6 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAA6CAYAAAB4Q5OdAAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABKklEQVR42mL8DwQMaAAggJgYsACAAMIqCBBAWAUBAgirIEAAYRUECCAWLJYzAAQQy38sKgECCKt2gADCKggQQFgFAQIIq0UAAYRVJUAAYRUECCCsggABhFUQIIBYsNjDABBAWFUCBBALAwOmUoAAwqoSIICwCgIEEFaLAAIIq0qAAMIqCBBAWAMEIICwqgQIIKyCAAGEVRAggLAKAgQQVkGAAMIqCBBAWJ0EEEBYVQIEEFZBgADCmmwAAgirSoAAwioIEEBYbQcIIKwqAQIIqyBAAGEVBAggrIIAAYQ14gACCKtKgADC6iSAAMKqEiCAsAoCBBBWQYAAwioIEEBYkyJAAGFVCRBAWAUBAgirjwACCGt0AAQQVu0AAYRVECCAsAoCBBDWAAEIMAAoCSZuy+v+UQAAAABJRU5ErkJggg==') repeat-x top;
                border:solid 1px #DFDFDF;
                margin: 10px 0;
                padding: 0 20px 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                min-height: 90%;
            }
            .header_logo {
                display:block;
                max-width:263px;
                max-height:70px;
            }
            .header_logo img {
                width:100%;
                height:100%;
            }
            .poweredbox {
                font-family: Geneva, Arial, Helvetica, sans-serif;
                color:#333333;
                padding-left: 15px;
            }
        </style>
    </head>
    <body>
        <a class="header_logo" href="http://www.fusionpanel.org/" target="_blank">
            <img src="data:image/png;
                 base64,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"
                 width="263" height="70" alt="Fusionpanel - The open-source web hosting control panel" border="0"></a>
        <div class="content">
            <h1><?php echo strtolower($_SERVER['HTTP_HOST']); ?></h1>
            <p>This domain is registered and is currently parked.... </p>
            <p>Thank you for using Fusionpanel to manage your hosting!</p>
            <p><b>For more information and help using Fusionpanel please visit:</b> <a href="http://www.fusionpanel.org/" target="_blank">www.fusionpanel.org</a>.</p>
            <p>Kind regards,<br>
                Your hosting company.</p>
        </div>
        <div class="poweredbox">
            <p><strong>Powered by <a href="http://www.fusionpanel.org/" target="_blank">Fusionpanel</a></strong> - The open-source web hosting control panel.</p>
        </div>
    </body>
</html>
