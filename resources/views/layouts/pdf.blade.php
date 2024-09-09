<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Hokers</title>
    
</head>
<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    h1{
        text-align: center;
        color: #333;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td{
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    th{
        border: 1px solid #f2f2f2;
    }

    tr:nth-child(even){
        background-color: #f9f9f9;
    }

    tr:hover{
        background-color: #e9e9e9;
    }
</style>

<body>
    <table style="font-size: 9pt">
        <tr>
            <td style="text-align: center">
                HOKERS<br>
                www.Hokerslatam.com<br>
                soportehokers@gmail.com
            </td>
           
            <td width="350px"><h1>Reporte Hokers</h1></td>
            <td>
                <img src="{{public_path('images/Logo_Hokers.png')}}" alt="Logo Hokers" width="90px">
            </td>
        </tr>
    </table>
  
        @yield('content')
    
</body>
</html>


