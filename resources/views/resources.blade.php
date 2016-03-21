@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="page-header resource-title">Standard Rig Safety Application</h3>
    <object data="{{url('img/Brochure - Standard Rig Safety.pdf')}}" type="application/pdf" width="100%" height="750px"> 
		<p>It appears you don't have a PDF plugin for this browser.
		<a href="{{url('img/Brochure - Standard Rig Safety.pdf')}}">click here to
		download the PDF file.</a></p>  
	</object>

    <h3 class="page-header resource-title">Commissioning a Crown Saver System Video</h3>
	<div class="text-center">
		<iframe width="80%" height="500px" src="https://www.youtube.com/embed/z5p4e7BGLaA" frameborder="0" allowfullscreen></iframe>
	</div>

    <h3 class="page-header resource-title">Operator Alert Application</h3>
    <object data="{{url('img/Brochure - Operator Alert System.pdf')}}" type="application/pdf" width="100%" height="1500px"> 
		<p>It appears you don't have a PDF plugin for this browser.
		<a href="{{url('img/Brochure - Operator Alert System.pdf')}}">click here to
		download the PDF file.</a></p>  
	</object>
            
    <h3 class="page-header resource-title">Recommended Safety System Bundles</h3>
    <object data="{{url('img/PRODUCT PACKAGES.pdf')}}" type="application/pdf" width="100%" height="850px"> 
		<p>It appears you don't have a PDF plugin for this browser.
		<a href="{{url('img/PRODUCT PACKAGES.pdf')}}">click here to
		download the PDF file.</a></p>  
	</object>

    <h3 class="page-header resource-title">Full Products List</h3>
    <object data="{{url('img/PRODUCTS - ALERT SYSTEMS.pdf')}}" type="application/pdf" width="100%" height="2300px"> 
		<p>It appears you don't have a PDF plugin for this browser.
		<a href="{{url('img/PRODUCTS - ALERT SYSTEMS.pdf')}}">click here to
		download the PDF file.</a></p>  
	</object>
</div>

@endsection
