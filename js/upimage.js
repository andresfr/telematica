// JavaScript Document
function ShowImagePreview( files )
{
    if( !( window.File && window.FileReader && window.FileList && window.Blob ) )
    {
      alert('El API necesario para leer la imagen no está soportado en este navegador. Por favor prueba otro.');
      return false;
    }

    if( typeof FileReader === "undefined" )
    {
        alert( "Filereader undefined!" );
        return false;
    }

    var file = files[0];

    if( !( /image/i ).test( file.type ) )
    {
        $("#error").fadeIn().text("Archivo no válido. Por favor comprueba que estás subiendo una imagen (jpg,jpeg,gif,png)");
		document.getElementById('imageUpload').setAttribute('type', 'input');
		document.getElementById('imageUpload').setAttribute('type', 'file');
        //return false;
    }

    reader = new FileReader();
    reader.onload = function(event) 
            { var img = new Image; 
              img.onload = UpdatePreviewCanvas; 
              img.src = event.target.result;  }
    reader.readAsDataURL( file );
	
	reader = new FileReader();
    reader.onload = function(event) 
            { var img = new Image; 
              img.onload = UpdatePreviewCanvas2; 
              img.src = event.target.result;  }
    reader.readAsDataURL( file );
}

function UpdatePreviewCanvas()
{
    var img = this;
    var canvas = document.getElementById( 'previewcanvas' );

    if( typeof canvas === "undefined" 
        || typeof canvas.getContext === "undefined" )
        return;

    var context = canvas.getContext( '2d' );

    var world = new Object();
    world.width = 500;
    world.height = 650;

    canvas.width = world.width;
    canvas.height = world.height;

    if( typeof img === "undefined" )
        return;

    var WidthDif = img.width - world.width;
    var HeightDif = img.height - world.height;

    var Scale = 0.0;
    if( WidthDif > HeightDif )
    {
        Scale = world.width / img.width;
    }
    else
    {
        Scale = world.height / img.height;
    }
    if( Scale > 1 )
        Scale = 1;

    var UseWidth = Math.floor( img.width * Scale );
    var UseHeight = Math.floor( img.height * Scale );

    var x = Math.floor( ( world.width - UseWidth ) / 2 );
    var y = Math.floor( ( world.height - UseHeight ) / 2 );

    context.drawImage( img, x, 0, UseWidth, UseHeight );
	$("#imgIcono").fadeOut();  
}

function UpdatePreviewCanvas2()
{
    var img = this;
    var canvas = document.getElementById( 'previewcanvas2' );

    if( typeof canvas === "undefined" 
        || typeof canvas.getContext === "undefined" )
        return;

    var context = canvas.getContext( '2d' );

    var world = new Object();
	world.top = 10;
    world.width = 500;
    world.height = 320;

    canvas.width = world.width;
    canvas.height = world.height;

    if( typeof img === "undefined" )
        return;

    var WidthDif = img.width - world.width;
    var HeightDif = img.height - world.height;

    var Scale = 0.0;
    if( WidthDif > HeightDif )
    {
        Scale = world.width / img.width;
    }
    else
    {
        Scale = world.height / img.height;
    }
    if( Scale > 1 )
        Scale = 1;

    var UseWidth = Math.floor( img.width * Scale );
    var UseHeight = Math.floor( img.height * Scale );

    var x = Math.floor( ( world.width - UseWidth ) / 2 );
    var y = Math.floor( ( world.height - UseHeight ) / 2 );

    context.drawImage( img, x, 10, UseWidth, UseHeight );
	$("#imgIcono").fadeOut();  
}