Implementando JWT com Codeigniter 3.1

Neste projeto utilizei codeigniter Rest e uma implementação de JWT com codeigniter Rest.

Codeigniter Rest
https://github.com/chriskacerguis/codeigniter-restserver

JWT com Codeigniter
https://github.com/ParitoshVaidya/CodeIgniter-JWT-Sample

Testando
Configure sua BASE URL em application/config/config.php

Abra a pagina teste http://sua_url/

Crique em Create Token, visualize o token.

Clique em Get token, um json será retornado com os dados contidos no token.

Os dados para serem codifificados no token estão no método token_get no arquivo application/controllers/Authentication.php






