<!-- Modal Core -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="login">Login</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="login">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" placeholder="Username" name="username" class="form-control" />
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control" />
          </div>
          <button type="submit" class="btn sdk">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      