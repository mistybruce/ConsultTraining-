<?php

//to catch common mistakes
@if (count($errors) > 0)
<div class="Warning! You're Screwing it up">
 <br><br>

 <ul>

 @foreach ($$errors->all() as $error 
<li>{{$error}} </li>
   @endforeach
   </ul>
  </div>
 @endif
