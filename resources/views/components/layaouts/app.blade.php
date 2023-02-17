<html lang="es">
<head>
   <title>Notocondaless-{{ $title ?? ''}}</title>
  <meta charset="UTF-8">
  <meta name= "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="{{ $metadescription ?? 'Default meta description'}} "/>
</head>
<body> 
    
     <x-layaouts.nav/>

    {{ $slot }}

</body>
</html>