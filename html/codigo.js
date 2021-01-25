window.onload=function()
{
	if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(visualizarPosicion,errorPosicion);
	}

	
}
var mapa;
function visualizarPosicion(position)
{
	//geolocalizacion
	console.log(position);
	var ubicacion=document.getElementById("ubicacion");
	ubicacion.innerHTML=position.coords.latitude + ", " +position.coords.longitude;
	
	//1.) Crear el mapa
	var divMapa=document.getElementById("mapa");
	var posUser= new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	
		//lat:position.coords.latitude, 
		//lng:position.coords.longitude,
	

	var opcionesMapa=
	{
		zoom:15,
		center: posUser,
		zoomControl:false,
		fullcreenControl: false,
		scaleControl:true,
		//mapTypeId: google.maps.MapTypeId.SATELLITE,
		mapTypeControl:true,
		mapTypeControlOptions:
		{
			style: google.maps.mapTypeControlStyle,
			position:google.maps.ControlPosition.TOP_CENTER
		}

	}

	mapa =new google.maps.Map(divMapa,opcionesMapa);

	//2.Crear marcador
	var opcionesMarca=
	{
		position:posUser,
		map:mapa,
		animation: google.maps.Animation.BRUNCE,
		icon:"img/usuario4.png"

	}
	var marcaUser= new google.maps.Marker(opcionesMarca);


	
	


	//.3 Multiples Marcas
	var Locations=
	[
		{lat:0.891611,lng:-77.548861}
		
	
	]

	var Labels="H"
	var Marcas=[]
	for (var i = 0; i <Locations.length; i++) 
	{
		var opcMarca=
		{
			position:Locations[i],
			map:mapa,
			label: "H"
		}
		Marcas[i]= new google.maps.Marker(opcMarca);
		Marcas[i].addListener('mouseover',mostrarInfo);
		//Marcas[i].addListener('mouseover',redireccionar);
		Marcas[i].addListener('dblclick',redireccionar);
	}
	marcaUser.addListener('mouseover',mostrarInfo);

	
}
	


function mostrarInfo(event)
{
	var contenido="<h3>EL CHURO</h3>";
	var opcionesInfo=
	{
		content:contenido,
		position:event.latLng
	};
	var info = new google.maps.InfoWindow(opcionesInfo);
	info.open(mapa);
}







function redireccionar()
{
	window.location.href="https://lamaria.gov.co/";
}




function errorPosicion ()
{
	alert("Esta página requiere de su ubicación ");
}