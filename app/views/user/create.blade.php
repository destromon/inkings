@extends('back')
<style>
  .form-user{
    width: 500px;
  }
</style>
<div class="form-user">

  <form role="form" action="/user/save" method="post">
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>

</div>