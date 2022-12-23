<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<h1>ACTIVOS FIJOS </h1>  <br>  
            <table class="table">
                                <thead>
                                    <tr>
                                
                                        <th>Codigo</th>
                                        <th>Descrip</th>
                                        <th>Precio</th>
                                        <th>Fecha</th>
                                 
                                        <th>Oficina</th>
                                        <th>Estado</th>
                                        

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($activos as $item)
                                    <tr>
                                       
                                        <td>{{ $item->codigo }}</td>
                                        <td>{{ $item->descrip }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>{{ $item->fechaadq }}</td>
                                      
                                        <td>{{ $item->oficina->nombre }}</td>
                                    
                                        <td>{{ $item->estado->descrip }}</td>
                                        
                                     

                                        
                                      
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
</body>
</html>





