<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Artefact request</title>
    <style>
        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            line-height: 100%;
        }

        [style*="Arial"] {
            font-family: Arial, sans-serif !important;
        }

        table td {
            border-collapse: collapse;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
    </style>
</head>

<body width="100%" style="margin:0;padding:0">
    <div style="font-size:0px;font-color:#ffffff;opacity:0;visibility:hidden;width:0;height:0;display:none;">Artefact
        request</div>
    <table cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;width:100%">
        <tr>
            <td>Name: {{ $request_data['name'] }}</td>
        </tr>
        <tr>
            <td>Email: {{ $request_data['email'] }}</td>
        </tr>
        @isset($request_data['question'])
            <tr>
                <td>Question: {{ $request_data['question'] }}</td>
            </tr>
        @endisset
        @isset($request_data['service'])
            <tr>
                <td>Service: {{ $request_data['service'] }}</td>
            </tr>
        @endisset
        <tr>
            <td>Message: {{ $request_data['message'] }}</td>
        </tr>
    </table>
</body>

</html>
