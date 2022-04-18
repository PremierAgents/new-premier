@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Share With Us </h1>
    <form action="action_page.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="country">Phone Number</label>
      <input type="text" id="lname" name="phone" placeholder="Your phone no..">


      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">

    </form>
  </div>
@endsection
