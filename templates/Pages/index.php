<table class="table">
  <thead>
    <tr>
      <th scope="col">Serviço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="http://<?=$ultimoIp->ip.':100'?>" target="_blank">Servidor WEB (HTTP)</a></td>
    </tr>
    <tr>
      <td><a href="http://<?=$ultimoIp->ip.':101'?>" target="_blank">Servidor WEB (HTTPS)</a></td>
    </tr>
    <tr>
      <td><a href="http://<?=$ultimoIp->ip.':2222'?>" target="_blank">SSH</a></td>
    </tr>
    <tr>
      <td><a href="http://<?=$ultimoIp->ip.':8081'?>" target="_blank">Gitlab</a></td>
    </tr>
  </tbody>
</table>