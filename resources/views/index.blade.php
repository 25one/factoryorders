@extends('layout')

@section('css')
<style>
textarea {
width: 100%;
height: 5em;
}
ul {
margin-left: 0; 
padding-left: 0; 
}
li {
list-style-type: none;	
}
.btn {
margin: 5px;	
}
[v-cloak] {
    display: none;
}
.view {
background-color: lightgray;
border: 1px solid white;	
}
</style>
@endsection

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-xs-12">
        	  <h3><b>Message Form</b></h3>
			  <div class="container" v-on:click.prevent>
			    <label for="name"><b>Name</b></label>
			    <input type="text" placeholder="Alex" name="name" v-model="name">
			    <label for="phone"><b>Phone</b></label>
			    <input type="text" placeholder="38(050)5673344" name="phone"  v-model="phone">
			    <label for="message"><b>Message</b></label>
			    <textarea placeholder="Here will be somthing interesting..." name="message"  v-model="message"></textarea>
			    <hr>
			    <label for="DB"><b>Send to </b></label>
			    <div class="row">
			    	<div class="col-md-4 col-sm-4 col-xs-12">
					    <ul>
		                  <li><a href="#" class="btn btn-success" v-on:click="makeActive('./senddb', 1);">DB 1</a></li>
		                  <li><a href="#" class="btn btn-success" v-on:click="makeActive('./senddb', 2);">DB 2</a></li>
		                  <li><a href="#" class="btn btn-success" v-on:click="makeActive('./senddb', 3);">DB 3</a></li>
					    </ul>
				    </div>
			    	<div class="col-md-4 col-sm-4 col-xs-12">
					    <ul>
		                  <li><a href="#" class="btn btn-primary"  v-on:click="makeActive('./sendfile', 0);">File</a></li>
					    </ul>
				    </div>	
			    	<div class="col-md-4 col-sm-4 col-xs-12">
					    <ul>
		                  <li><a href="#" class="btn btn-info"  v-on:click="makeActive('./sendemail', 0);">E-mail</a></li>
		                  For checking write your email in app.php('email')!
					    </ul>
				    </div>
			    </div>	    			    
			  </div>
        </div>
        <div class="col-md-3 col-sm-2 col-xs-12">
           <div class="row view">
              <div class="col-md-12 col-sm-12 col-xs-12">	
                <label for="db1"><b>DB 1</b></label>
                <span id="db1home">@if($db[1]) @foreach($db[1] as $db1)<br>{{ $db1->name . ' - ' . $db1->phone . ' - ' . $db1->message }}@endforeach @endif</span>
                <span class="item" v-for="item1 in items1" v-cloak>
                   <br>@{{ item1.name }} - @{{ item1.phone }} - @{{ item1.message }}  
                </span>
              </div>
           </div>
           <div class="row view">
              <div class="col-md-12 col-sm-12 col-xs-12">	
                <label for="db2"><b>DB 2</b></label>
                <span id="db2home">@if($db[2]) @foreach($db[2] as $db2)<br>{{ $db2->name . ' - ' . $db2->phone . ' - ' . $db2->message }}@endforeach @endif</span>
                <span class="item" v-for="item2 in items2" v-cloak>
                   <br>@{{ item2.name }} - @{{ item2.phone }} - @{{ item2.message }}  
                </span>                
              </div>
           </div>
           <div class="row view">
              <div class="col-md-12 col-sm-12 col-xs-12">	
                <label for="db3"><b>DB 3</b></label>
                <span id="db3home">@if($db[3]) @foreach($db[3] as $db3)<br>{{ $db3->name . ' - ' . $db3->phone . ' - ' . $db3->message }}@endforeach @endif</span>
                <span class="item" v-for="item3 in items3" v-cloak>
                   <br>@{{ item3.name }} - @{{ item3.phone }} - @{{ item3.message }}  
                </span>                       
              </div>
           </div>                      
        </div>	        
        <div class="col-md-3 col-sm-2 col-xs-12">
           <div class="row view">
              <div class="col-md-12 col-sm-12 col-xs-12">	
                <label for="db1"><b>File</b></label><br>
                <span id="contenthome">@if($content) {{ $content }} @endif</span>
                @{{ content }}
              </div>
           </div>
        </div>	
    </div>
@endsection

@section('js')

@endsection
