<br>

<p>
    The <code>Authorization Code</code> grant type is the most common workflow for OAuth2.0.  Clicking the "Authorize" button below will send you to an OAuth2.0 Server to authorize:
</p>

<a class="btn btn-primary" href="<?php echo HTTP_BASE_URL ?>/server/authorize?response_type=code&client_id=<?php echo $config['client_id']; ?>&redirect_uri=<?php echo HTTP_BASE_URL ?>/client/receive_authcode&state={{session_id}}">Authorize</a>
