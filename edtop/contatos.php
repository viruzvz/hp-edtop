<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="carpet">
                <div class="carpet-header">
                    <a class="link link-primary mr-4" href="mailto:<?php echo get_theme_mod('E-mail'); ?>" title="Entre em contato">
                        <i class="fa-envelope fa-solid text-danger">&nbsp;</i>
                        <strong><?php echo get_theme_mod('E-mail'); ?></strong>
                    </a>
                    <a class="link link-primary mr-4" href="tel:<?php echo get_theme_mod('Telefone'); ?>" title="Telefone">
                        <i class="fa-phone fa-solid text-danger"></i>
                    </a>
                    <a class="link link-primary" href="tel:<?php echo get_theme_mod('Telefone'); ?>" title="whatsapp">
                        <i class="fa-brands fa-whatsapp text-danger">&nbsp;</i>
                        <strong><?php echo get_theme_mod('Telefone'); ?></strong>
                    </a>
                </div>
                <div class="carpet-body">
                    <form class="contact-form" action="https://form.ultramail.com.br/" METHOD="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" TYPE="text" NAME="nome" SIZE="24" id="name" placeholder="Nome:">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" TYPE="text" NAME="sname" SIZE="24"  id="sname" placeholder="Sobre nome:">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" TYPE="text" NAME="email" SIZE="24" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <input class="form-control" TYPE="text" NAME="assunto" SIZE="24" placeholder="Assunto:">
                            <!-- <select class="form-control js-my-select" id="exampleFormControlSelect1">
                                <option>Selecione</option>
                                <option value="Trabalhe-com-a-Taurus">Trabalhe-com-a-Taurus</option>
                                <option value="dois">2</option>
                                <option value="tres">3</option>
                                <option value="quatro">4</option>
                            </select> -->
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
                        </div>
                        <!--
                        Chave de autenticação no UltraMail para o MailBox.
                        Se a senha do MailBox for alterada esta chave deverá ser gerada novamente através do seu painel de controle.
                        -->
                        <INPUT TYPE="hidden" NAME="key" VALUE="eyJpdiI6ImFQOFJUcFhwTTZhdXQreEdGcUpVUmc9PSIsInZhbHVlIjoiV0FkOXNkUUl0S3phNkpqUmtkSm5LVTRyeUMwNW45SXhJYWMyRWZzTGlDYVwvTkZOdVNWY09INjBkSUR1NVFVaFwvK09ScnNlREdwNHVhNDBzdHpuZlwvNzNrcGlrWVJadzFIVnFTTUhTbUoraTB0Qk5BbXFBdjRCMUJnWStJdDFzQ3ZmYlNNM3ZhMTBaQzMxWDVcL0VJbHdmakpLMzVUUkhqaFpvYXAwU3BKZEJheCtHODM5NzFzdjQyRXhzN0pCbzdrS1NBeXhpcXFwaVdrcmJic0hzMHpDckE9PSIsIm1hYyI6Ijg2YWRiNGRlMGFjODE0ZjI0YzlmYTU0M2Q0YzE5OTI4ZmZjZmNlOGYyNGM0NWM2ZDg5ZGM1OTllYjMyMDdmY2UifQ==">

                        <!--
                        Pagina de conclusão do formulário de envio. Altere para a página desejada
                        -->
                        <INPUT TYPE="hidden" NAME="redirect" VALUE="https://edtop.com.br/PaginaDeResposta.php">

                        <div class="form-group">
                            <div class="text-right">
                                <a class="btn btn-danger d-block" TYPE="submit" VALUE="Enviar"> ENVIAR &nbsp;
                                    <span class="float-right">
                                        <i class="fa-envelope fa-solid"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>