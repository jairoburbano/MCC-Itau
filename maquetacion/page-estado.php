<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Estado de Liquidez y Solvencia Patrimonial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="estado">
        <?php include('svg-defs.svg'); ?>
        <header class="header">
            <div class="header--top">
                <div class="header__wrap">
                    <a href="index.php" title="MCC Itau" class="header__logo">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="208.2px" height="38px" viewBox="0 0 208.2 38" enable-background="new 0 0 208.2 38" xml:space="preserve" >
                            <g>
                                <g>
                                    <path fill="#003A5D" d="M0.3,9.6c0-3.3-0.1-5.8-0.3-8.7h3.4l0.2,6.4h0.2C6.1,3.1,9.6,0,15.6,0c5,0,8.9,3.3,10.5,8h0.2 c1-2.2,2.4-3.8,3.7-4.9c2.4-2,4.8-3,8.6-3c3.6,0,11.9,2,11.9,15.8v21.5h-3.6V16.2c0-8.2-3.2-13-9.5-13c-4.6,0-8.1,3.3-9.6,7.2 c-0.3,1.1-0.6,2.3-0.6,3.6v23.4h-3.6V14.5c0-6.6-3.1-11.4-9-11.4c-4.9,0-8.7,3.9-10.1,8.2c-0.3,1-0.5,2.3-0.5,3.5v22.5H0.3V9.6z"/>
                                    <path fill="#003A5D" d="M87.5,35.6c-1.6,0.8-5.4,2.4-10.7,2.4c-10.5,0-17.4-7.7-17.4-18.6C59.4,7.9,67.3,0,78.1,0 c4.5,0,8.2,1.3,9.6,2.3l-1.3,3c-1.7-1-4.6-2.1-8.6-2.1C68,3.1,63,10.6,63,19.1c0,9.6,6,15.8,14.4,15.8c4.3,0,7.1-1.2,9.1-2.1 L87.5,35.6z"/>
                                    <path fill="#003A5D" d="M121.4,35.6c-1.6,0.8-5.4,2.4-10.7,2.4c-10.5,0-17.4-7.7-17.4-18.6C93.2,7.9,101.1,0,111.9,0 c4.5,0,8.2,1.3,9.6,2.3l-1.3,3c-1.7-1-4.6-2.1-8.6-2.1c-9.8,0-14.8,7.5-14.8,16c0,9.6,6,15.8,14.4,15.8c4.3,0,7.1-1.2,9.1-2.1 L121.4,35.6z"/>
                                </g>
                                <g>
                                    <path fill="#76777B" d="M144,7.4c0,0.3-0.2,0.6-0.6,0.6c-0.3,0-0.6-0.3-0.6-0.6c0-0.3,0.3-0.6,0.6-0.6C143.7,6.8,144,7.1,144,7.4z M143,16.7V9.5h0.7v7.2H143z"/>
                                    <path fill="#76777B" d="M146.2,11.2c0-0.7,0-1.2-0.1-1.7h0.7l0,1.3h0c0.4-0.8,1.3-1.5,2.5-1.5c0.7,0,2.5,0.3,2.5,3v4.3h-0.7v-4.3 c0-1.3-0.5-2.5-2-2.5c-1,0-1.9,0.7-2.2,1.7c0,0.2-0.1,0.4-0.1,0.6v4.5h-0.7V11.2z"/>
                                    <path fill="#76777B" d="M153.8,9.5l1.7,4.5c0.3,0.7,0.5,1.3,0.7,1.9h0c0.2-0.6,0.5-1.2,0.7-1.9l1.7-4.5h0.8l-2.9,7.2h-0.6 l-2.8-7.2H153.8z"/>
                                    <path fill="#76777B" d="M160.9,13c0,2.3,1.2,3.2,2.7,3.2c1.1,0,1.6-0.2,2-0.4l0.2,0.6c-0.3,0.2-1,0.5-2.3,0.5 c-2.1,0-3.4-1.5-3.4-3.6c0-2.4,1.4-3.9,3.2-3.9c2.4,0,2.8,2.2,2.8,3.3c0,0.2,0,0.3,0,0.4H160.9z M165.5,12.4c0-1-0.4-2.5-2.1-2.5 c-1.6,0-2.3,1.4-2.4,2.5H165.5z"/>
                                    <path fill="#76777B" d="M168,11.6c0-0.7,0-1.5-0.1-2.2h0.7l0,1.5h0c0.3-0.9,1.1-1.6,2-1.6c0.1,0,0.2,0,0.3,0V10 c-0.1,0-0.2,0-0.3,0c-1,0-1.7,0.9-1.9,2c0,0.2-0.1,0.5-0.1,0.7v4H168V11.6z"/>
                                    <path fill="#76777B" d="M172.2,15.7c0.4,0.2,1,0.5,1.6,0.5c1.1,0,1.7-0.6,1.7-1.4c0-0.8-0.5-1.2-1.5-1.6c-1.2-0.5-1.8-1.1-1.8-2 c0-1,0.8-2,2.2-2c0.7,0,1.2,0.2,1.6,0.5l-0.3,0.6c-0.3-0.2-0.7-0.4-1.4-0.4c-0.9,0-1.4,0.6-1.4,1.2c0,0.8,0.5,1.1,1.5,1.5 c1.2,0.5,1.9,1,1.9,2.1c0,1.2-1,2.1-2.4,2.1c-0.7,0-1.4-0.2-1.8-0.5L172.2,15.7z"/>
                                    <path fill="#76777B" d="M179,7.4c0,0.3-0.2,0.6-0.6,0.6c-0.3,0-0.6-0.3-0.6-0.6c0-0.3,0.3-0.6,0.6-0.6C178.8,6.8,179,7.1,179,7.4z M178.1,16.7V9.5h0.7v7.2H178.1z"/>
                                    <path fill="#76777B" d="M187.4,13c0,2.7-1.8,3.8-3.5,3.8c-1.9,0-3.3-1.5-3.3-3.7c0-2.5,1.6-3.8,3.4-3.8 C186,9.3,187.4,10.8,187.4,13z M181.3,13.1c0,1.8,1.2,3.2,2.6,3.2c1.5,0,2.7-1.4,2.7-3.2c0-1.3-0.7-3.1-2.6-3.1 C182.2,9.9,181.3,11.5,181.3,13.1z"/>
                                    <path fill="#76777B" d="M189.2,11.2c0-0.7,0-1.2-0.1-1.7h0.7l0,1.3h0c0.4-0.8,1.3-1.5,2.5-1.5c0.7,0,2.5,0.3,2.5,3v4.3h-0.7v-4.3 c0-1.3-0.5-2.5-2-2.5c-1,0-1.9,0.7-2.2,1.7c0,0.2-0.1,0.4-0.1,0.6v4.5h-0.7V11.2z"/>
                                    <path fill="#76777B" d="M197.4,13c0,2.3,1.2,3.2,2.7,3.2c1.1,0,1.6-0.2,2-0.4l0.2,0.6c-0.3,0.2-1,0.5-2.3,0.5 c-2.1,0-3.4-1.5-3.4-3.6c0-2.4,1.4-3.9,3.2-3.9c2.4,0,2.8,2.2,2.8,3.3c0,0.2,0,0.3,0,0.4H197.4z M202,12.4c0-1-0.4-2.5-2.1-2.5 c-1.6,0-2.3,1.4-2.4,2.5H202z"/>
                                    <path fill="#76777B" d="M204.2,15.7c0.4,0.2,1,0.5,1.6,0.5c1.1,0,1.7-0.6,1.7-1.4c0-0.8-0.5-1.2-1.5-1.6c-1.2-0.5-1.8-1.1-1.8-2 c0-1,0.8-2,2.2-2c0.7,0,1.2,0.2,1.6,0.5l-0.3,0.6c-0.3-0.2-0.7-0.4-1.4-0.4c-0.9,0-1.4,0.6-1.4,1.2c0,0.8,0.5,1.1,1.5,1.5 c1.2,0.5,1.9,1,1.9,2.1c0,1.2-1,2.1-2.4,2.1c-0.7,0-1.4-0.2-1.8-0.5L204.2,15.7z"/>
                                    <path fill="#76777B" d="M148.8,30.5c0,1.8-0.4,2.8-1,3.3c-0.7,0.6-1.6,0.9-2.4,0.9c-0.8,0-1.7-0.2-2.3-0.6l0.3-0.6 c0.5,0.3,1.2,0.6,2.1,0.6c1.5,0,2.6-0.8,2.6-2.9v-1h0c-0.4,0.7-1.2,1.4-2.5,1.4c-1.8,0-3.1-1.6-3.1-3.5c0-2.5,1.7-3.8,3.2-3.8 c1.4,0,2.1,0.8,2.4,1.4h0l0-1.2h0.7c0,0.5-0.1,1.1-0.1,1.9V30.5z M148.1,27.1c0-0.3,0-0.5-0.1-0.7c-0.3-0.9-1.1-1.6-2.2-1.6 c-1.5,0-2.6,1.2-2.6,3.2c0,1.6,0.9,3,2.6,3c1,0,1.9-0.6,2.2-1.6c0.1-0.2,0.1-0.5,0.1-0.8V27.1z"/>
                                    <path fill="#76777B" d="M151.2,20.9h0.7v10.7h-0.7V20.9z"/>
                                    <path fill="#76777B" d="M160.5,27.9c0,2.7-1.8,3.8-3.5,3.8c-1.9,0-3.3-1.5-3.3-3.7c0-2.5,1.6-3.8,3.4-3.8 C159.2,24.2,160.5,25.7,160.5,27.9z M154.5,27.9c0,1.8,1.2,3.2,2.6,3.2c1.5,0,2.7-1.4,2.7-3.2c0-1.3-0.7-3.1-2.6-3.1 C155.3,24.8,154.5,26.4,154.5,27.9z"/>
                                    <path fill="#76777B" d="M162.4,20.9h0.7v4.8h0c0.5-0.9,1.4-1.5,2.6-1.5c1.8,0,3.1,1.5,3.1,3.7c0,2.6-1.6,3.8-3.2,3.8 c-1.2,0-2-0.5-2.6-1.5h0l-0.1,1.3h-0.6c0-0.5,0.1-1.1,0.1-1.7V20.9z M163.1,28.8c0,0.2,0,0.3,0.1,0.5c0.3,1.1,1.2,1.8,2.4,1.8 c1.7,0,2.6-1.4,2.6-3.2c0-1.7-0.9-3.1-2.5-3.1c-1.1,0-2.1,0.7-2.4,1.9c0,0.2-0.1,0.4-0.1,0.6V28.8z"/>
                                    <path fill="#76777B" d="M175.2,29.8c0,0.6,0,1.2,0.1,1.7h-0.7l-0.1-1h0c-0.4,0.6-1.2,1.2-2.3,1.2c-1.5,0-2.1-1-2.1-2 c0-1.7,1.5-2.7,4.4-2.6v-0.2c0-0.7-0.1-2.1-1.8-2.1c-0.6,0-1.3,0.2-1.8,0.5l-0.2-0.5c0.7-0.4,1.5-0.6,2.1-0.6 c2.1,0,2.5,1.6,2.5,2.8V29.8z M174.4,27.7c-1.6,0-3.6,0.2-3.6,1.9c0,1,0.7,1.5,1.4,1.5c1.2,0,1.9-0.7,2.1-1.4 c0.1-0.2,0.1-0.3,0.1-0.4V27.7z"/>
                                    <path fill="#76777B" d="M177.5,20.9h0.7v10.7h-0.7V20.9z"/>
                                    <path fill="#76777B" d="M180.8,27.9c0,2.3,1.2,3.2,2.7,3.2c1.1,0,1.6-0.2,2-0.4l0.2,0.6c-0.3,0.2-1,0.5-2.3,0.5 c-2.1,0-3.4-1.5-3.4-3.6c0-2.4,1.4-3.9,3.2-3.9c2.4,0,2.8,2.2,2.8,3.3c0,0.2,0,0.3,0,0.4H180.8z M185.4,27.3c0-1-0.4-2.5-2.1-2.5 c-1.6,0-2.3,1.4-2.4,2.5H185.4z"/>
                                    <path fill="#76777B" d="M187.7,30.6c0.4,0.2,1,0.5,1.6,0.5c1.1,0,1.7-0.6,1.7-1.4c0-0.8-0.5-1.2-1.5-1.6c-1.2-0.5-1.8-1.1-1.8-2 c0-1,0.8-2,2.2-2c0.7,0,1.2,0.2,1.6,0.5l-0.3,0.6c-0.3-0.2-0.7-0.4-1.4-0.4c-0.9,0-1.4,0.6-1.4,1.2c0,0.8,0.5,1.1,1.5,1.5 c1.2,0.5,1.9,1,1.9,2.1c0,1.2-1,2.1-2.4,2.1c-0.7,0-1.4-0.2-1.8-0.5L187.7,30.6z"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div class="header__logo--secundario">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="123px" height="38px" viewBox="0 0 123 38" enable-background="new 0 0 123 38" xml:space="preserve">
                            <g>
                                <g>
                                    <path fill="#FF5900" d="M5.9,30c0,0.7,0,1.3,0.1,1.8H5.2l0-1.3h0C4.8,31.2,3.9,32,2.6,32c-1,0-2.6-0.5-2.6-3.3v-4.4h0.8v4.2 c0,1.6,0.5,2.8,2,2.8c1.1,0,1.9-0.8,2.2-1.5C5,29.6,5.1,29.3,5.1,29v-4.7h0.8V30z"/>
                                    <path fill="#FF5900" d="M8.4,26.1c0-0.7,0-1.2-0.1-1.8H9l0,1.4h0c0.4-0.8,1.4-1.5,2.6-1.5c0.7,0,2.6,0.4,2.6,3.2v4.5h-0.8v-4.4 c0-1.4-0.5-2.6-2.1-2.6c-1,0-2,0.8-2.3,1.7c0,0.2-0.1,0.4-0.1,0.7v4.7H8.4V26.1z"/>
                                    <path fill="#FF5900" d="M21.4,30.1c0,0.6,0,1.2,0.1,1.8h-0.7l-0.1-1.1h0c-0.4,0.6-1.2,1.3-2.4,1.3c-1.5,0-2.2-1.1-2.2-2.1 c0-1.7,1.5-2.8,4.6-2.8V27c0-0.7-0.1-2.2-1.9-2.2c-0.7,0-1.3,0.2-1.9,0.6l-0.2-0.5c0.7-0.5,1.5-0.6,2.2-0.6c2.2,0,2.6,1.6,2.6,3 V30.1z M20.7,27.8c-1.6,0-3.8,0.2-3.8,2c0,1.1,0.7,1.6,1.5,1.6c1.3,0,2-0.8,2.2-1.5c0.1-0.2,0.1-0.3,0.1-0.5V27.8z"/>
                                    <path fill="#FF5900" d="M27.4,28c0,2.4,1.3,3.4,2.9,3.4c1.1,0,1.7-0.2,2.1-0.4l0.2,0.6c-0.3,0.2-1,0.5-2.4,0.5 c-2.2,0-3.5-1.6-3.5-3.8c0-2.5,1.4-4.1,3.4-4.1c2.5,0,2.9,2.3,2.9,3.4c0,0.2,0,0.3,0,0.5H27.4z M32.2,27.4c0-1-0.4-2.6-2.2-2.6 c-1.7,0-2.4,1.5-2.5,2.6H32.2z"/>
                                    <path fill="#FF5900" d="M34.9,26.1c0-0.7,0-1.2-0.1-1.8h0.7l0,1.3h0c0.5-0.9,1.2-1.5,2.4-1.5c1,0,1.8,0.7,2.2,1.6h0 c0.2-0.5,0.5-0.8,0.8-1c0.5-0.4,1-0.6,1.8-0.6c0.7,0,2.5,0.4,2.5,3.3v4.4h-0.8v-4.4c0-1.7-0.7-2.7-2-2.7c-0.9,0-1.7,0.7-2,1.5 c-0.1,0.2-0.1,0.5-0.1,0.7v4.8h-0.8v-4.7c0-1.4-0.6-2.3-1.9-2.3c-1,0-1.8,0.8-2.1,1.7c-0.1,0.2-0.1,0.5-0.1,0.7v4.6h-0.8V26.1z"/>
                                    <path fill="#FF5900" d="M47.7,26.7c0-0.9,0-1.7-0.1-2.4h0.7l0,1.4h0c0.5-1,1.5-1.6,2.8-1.6c1.9,0,3.2,1.6,3.2,3.8 c0,2.7-1.6,4.1-3.4,4.1c-1.1,0-2-0.5-2.6-1.4h0v4.3h-0.8V26.7z M48.5,28.9c0,0.2,0,0.4,0.1,0.6c0.3,1.2,1.3,1.9,2.5,1.9 c1.7,0,2.7-1.4,2.7-3.4c0-1.7-0.9-3.2-2.6-3.2c-1.1,0-2.2,0.8-2.5,2c0,0.2-0.1,0.4-0.1,0.6V28.9z"/>
                                    <path fill="#FF5900" d="M56.3,26.6c0-0.8,0-1.5-0.1-2.3H57l0,1.5h0c0.3-0.9,1.1-1.7,2.1-1.7c0.1,0,0.2,0,0.3,0v0.7 c-0.1,0-0.2,0-0.4,0c-1,0-1.8,0.9-2,2.1c0,0.2-0.1,0.5-0.1,0.7v4.1h-0.8V26.6z"/>
                                    <path fill="#FF5900" d="M60.9,28c0,2.4,1.3,3.4,2.9,3.4c1.1,0,1.7-0.2,2.1-0.4l0.2,0.6c-0.3,0.2-1,0.5-2.4,0.5 c-2.2,0-3.5-1.6-3.5-3.8c0-2.5,1.4-4.1,3.4-4.1c2.5,0,2.9,2.3,2.9,3.4c0,0.2,0,0.3,0,0.5H60.9z M65.7,27.4c0-1-0.4-2.6-2.2-2.6 c-1.7,0-2.4,1.5-2.5,2.6H65.7z"/>
                                    <path fill="#FF5900" d="M68.1,30.9c0.4,0.3,1,0.5,1.7,0.5c1.2,0,1.8-0.6,1.8-1.4c0-0.8-0.5-1.3-1.6-1.7c-1.2-0.5-1.9-1.1-1.9-2.1 c0-1.1,0.9-2,2.3-2c0.7,0,1.3,0.2,1.7,0.5l-0.3,0.6c-0.3-0.2-0.8-0.5-1.5-0.5c-1,0-1.5,0.6-1.5,1.3c0,0.8,0.5,1.1,1.6,1.5 c1.2,0.5,1.9,1.1,1.9,2.2c0,1.3-1,2.1-2.5,2.1c-0.7,0-1.4-0.2-1.9-0.5L68.1,30.9z"/>
                                    <path fill="#FF5900" d="M78.9,30.1c0,0.6,0,1.2,0.1,1.8h-0.7l-0.1-1.1h0C77.8,31.3,77,32,75.8,32c-1.5,0-2.2-1.1-2.2-2.1 c0-1.7,1.5-2.8,4.6-2.8V27c0-0.7-0.1-2.2-1.9-2.2c-0.7,0-1.3,0.2-1.9,0.6l-0.2-0.5c0.7-0.5,1.5-0.6,2.2-0.6c2.2,0,2.6,1.6,2.6,3 V30.1z M78.2,27.8c-1.6,0-3.8,0.2-3.8,2c0,1.1,0.7,1.6,1.5,1.6c1.3,0,2-0.8,2.2-1.5c0.1-0.2,0.1-0.3,0.1-0.5V27.8z"/>
                                </g>
                                <path fill="#004A8F" d="M91.3,0h25.3c3.5,0,6.3,2.8,6.3,6.3v25.3c0,3.5-2.8,6.3-6.3,6.3H91.3c-3.5,0-6.3-2.8-6.3-6.3V6.3 C85,2.8,87.8,0,91.3,0"/>
                                <path fill="#FAEA27" d="M88.1,19h3v12.7h-3V19z M104.3,21.9c3.3,0,4.4,1.9,4.4,4.2v5.6h-2.4l-0.3-1h0c-0.6,0.8-1.7,1.2-3,1.2 c-2.1,0-3.3-1.5-3.3-2.9c0-2.5,2.4-3.7,6.2-3.7v-0.1c0-0.4-0.4-1.3-2.1-1.3c-1,0-2.2,0.4-2.9,0.8l-0.6-1.9 C101.2,22.4,102.5,21.9,104.3,21.9 M106,27.2c-0.2,0-0.4,0-0.6,0c-0.3,0-0.6,0-0.9,0.1c-1.1,0.2-1.9,0.6-1.9,1.5 c0,0.8,0.6,1.2,1.4,1.2c0.9,0,1.6-0.6,1.9-1.2c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0-0.2,0.1-0.3,0.1-0.5V27.2z M116.9,22.2v5.6 c0,0.2,0,0.4-0.1,0.6c-0.2,0.6-0.8,1.2-1.8,1.2c-1.2,0-1.7-0.9-1.7-2.4v-5h-2.9v5.6c0,0.7,0.1,1.4,0.3,1.9c0.2,0.5,0.4,1,0.7,1.3 c0.3,0.3,0.7,0.6,1.1,0.7c0.4,0.2,0.9,0.2,1.4,0.2c0.5,0,0.9-0.1,1.2-0.2c0.4-0.1,0.7-0.2,0.9-0.4c0.3-0.2,0.5-0.3,0.6-0.5 c0.2-0.2,0.3-0.3,0.4-0.5l0.4,1.3h2.3v-9.5H116.9z M93.9,19v3.2h-1.3v2.2h1.3v3.9c0,1.3,0.3,2.2,0.8,2.8c0.5,0.5,1.3,0.9,2.3,0.9 c0.9,0,1.2-0.1,1.6-0.3v-2.2c-0.1,0-0.3,0.1-0.6,0.1c-1,0-1.3-0.6-1.3-1.8v-3.4h1.8v-2.2h-1.8V19H93.9z M115.8,19l-1.8,2.6h2.1 l2.5-2.6H115.8z"/>
                            </g>
                        </svg>
                    </div><!-- /.header__logo--secundario -->
                </div><!-- /.header__wrap -->
            </div><!-- /.header--top -->
        </header><!-- /.header -->
        <div class="wrap">
            <h1 class="title">Estado de Liquidez y Solvencia Patrimonial</h1><!-- /.title -->
            <div class="estado__box">
                <div class="estado__title">Información al <span>30 / 06 / 2016</span></div><!-- /.estado__title -->
                <div class="estado__column">
                    <div class="estado__column__title">
                        Patrimonio Depurado
                    </div><!-- /.estado__column__title -->
                    <div class="estado--space">
                    </div><!-- /.estado--space -->
                    <div class="estado__divisor">
                    </div><!-- /.estado__divisor -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__number">
                        <div class="divisor__item">
                            <span>M$</span> 3.212.319
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__number -->
                    <div class="estado--space">
                    </div><!-- /.estado--space -->
                    <div class="estado__resultado">
                    </div><!-- /.estado__resultado -->
                </div><!-- /.estado__column -->
                <div class="estado__column">
                    <div class="estado__column__title">
                        Liquidez General
                    </div><!-- /.estado__column__title -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__divisor">
                        <div class="divisor__item">
                            Efectivo y Efectivo equivalente y <br>
                            Realizable a menos de 7 días
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            Pasivos Exigibles <br>
                            a menos de 7 días
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__divisor -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__number">
                        <div class="divisor__item">
                            <span>M$</span> 3.212.319
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            <span>M$</span> 5.404.863
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__number -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__resultado">
                        1,42 veces
                    </div><!-- /.estado__resultado -->
                </div><!-- /.estado__column -->
                <div class="estado__column">
                    <div class="estado__column__title">
                        Liquidez por
                        Intermediación
                    </div><!-- /.estado__column__title -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__divisor">
                        <div class="divisor__item">
                            Efectivo y Efectivo equivalente <br>
                            + Deudores por Intermediación
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            Acreedores por Intermediación
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__divisor -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__number">
                        <div class="divisor__item">
                            <span>M$</span> 1.336.631
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            <span>M$</span> 1.211.927
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__number -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__resultado">
                        1,10 veces
                    </div><!-- /.estado__resultado -->
                </div><!-- /.estado__column -->
                <div class="estado__column">
                    <div class="estado__column__title">
                        Razón de <br>Endeudamiento
                    </div><!-- /.estado__column__title -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__divisor">
                        <div class="divisor__item">
                            Pasivos Exigibles
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            Patrimonio Líquido
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__divisor -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__number">
                        <div class="divisor__item">
                            <span>M$</span> 3.212.319
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            <span>M$</span> 5.404.863
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__number -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__resultado">
                        1,42 veces
                    </div><!-- /.estado__resultado -->
                </div><!-- /.estado__column -->
                <div class="estado__column">
                    <div class="estado__column__title">
                        Razón Cobert. <br>Patrimonial
                    </div><!-- /.estado__column__title -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__divisor">
                        <div class="divisor__item">
                            Monto de Cobertura
                            Patrimonial
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            Patrimonio Líquido
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__divisor -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__number">
                        <div class="divisor__item">
                            <span>M$</span> 3.212.319
                        </div><!-- /.divisor__item -->
                        <hr>
                        <div class="divisor__item">
                            <span>M$</span> 5.404.863
                        </div><!-- /.divisor__item -->
                    </div><!-- /.estado__number -->
                    <div class="estado--space">
                        =
                    </div><!-- /.estado--space -->
                    <div class="estado__resultado">
                        1,42 veces
                    </div><!-- /.estado__resultado -->
                </div><!-- /.estado__column -->
            </div><!-- /.estado__box -->
            <div class="estado__icono">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="83.3px" height="189.4px" viewBox="0 0 83.3 189.4" enable-background="new 0 0 83.3 189.4"
                     xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <path fill="#003A5D" d="M35.5,94.7c0-7.4-2.9-14.3-8.1-19.5L0,47.7v2.7l26.1,26.1c4.8,4.8,7.5,11.3,7.5,18.1
                                                c0,6.9-2.7,13.3-7.5,18.1L0,138.9v2.7l27.4-27.4C32.6,109,35.5,102,35.5,94.7z"/>
                        <path fill="#003A5D" d="M51.4,94.7c0-7.4-2.9-14.3-8.1-19.5L0,31.8v2.7l42,42c4.8,4.8,7.5,11.3,7.5,18.1c0,6.9-2.7,13.3-7.5,18.1
                                                l-42,42v2.7l43.4-43.4C48.6,109,51.4,102,51.4,94.7z"/>
                        <path fill="#003A5D" d="M67.3,94.7c0-7.4-2.9-14.3-8.1-19.5L0,15.9v2.7l57.9,57.9c4.8,4.8,7.5,11.3,7.5,18.1
                                                c0,6.9-2.7,13.3-7.5,18.1L0,170.7v2.7l59.3-59.3C64.5,109,67.3,102,67.3,94.7z"/>
                        <path fill="#FF5900" d="M83.3,94.7c0-7.4-2.9-14.3-8.1-19.5L0,0v2.7l73.8,73.8c4.8,4.8,7.5,11.3,7.5,18.1c0,6.9-2.7,13.3-7.5,18.1
                                                L0,186.7v2.7l75.2-75.2C80.4,109,83.3,102,83.3,94.7z"/>
                    </g>
                </svg>
            </div><!-- /.estado__icono -->
        </div><!-- /.wrap -->
        <footer></footer>
        <script src="js/app.min.js"></script>
    </body>
</html>