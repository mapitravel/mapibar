
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llame ahora gratis</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.0/pure-min.css">
    <link rel="stylesheet" href="llamada.css">
</head>
<body>
    <div class="content pure-g-r">
        <div class="header pure-u-1 align-center">
            <h1><i class="icon icon-phone"></i> ¡Reciba ahora mismo una llamada!</h1>
        </div>
        <div class="middle pure-u-1 align-center">
            <p><i class="icon-smile"></i> Ingrese sus datos y recibirá una llamada de nuestros operadores para ayudarle.</p>
        </div>
        <div class="body pure-u-1">
            <form class="pure-form pure-form-aligned">
                <div class="pure-control-group">
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres" id="nombres" class="pure-input-1-2">
                </div>
                <div class="pure-control-group">
                    <label for="lugar">Ciudad/País:</label>
                    <input type="text" name="telefono" id="lugar" class="pure-input-1-2" placeholder="Ejemplo: Bogotá/Colombia">
                </div>
                <div class="pure-control-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class="pure-input-1-2" placeholder="Ejemplo: +52 166 41856266">
                </div>
                <div class="pure-controls">
                    <button type="button" id="submit" class="pure-button pure-button-primary">Llámenme ahora mismo</button>
                </div>
            </form>
            <div id="mensaje" style="display: none" class="pure-group">
                <p>Recibiendo datos y llamando...</p>
                <p>¿No recibiste la llamada? Revisa tus datos e <a id="try" href="#">intenta otra vez</a>.</p>
            </div>
        </div>
    </div>
</body>
<!-- begin olark code --><script type='text/javascript'>/*{literal}<![CDATA[*/window.olark||(function(i){var e=window,h=document,a=e.location.protocol=="https:"?"https:":"http:",g=i.name,b="load";(function(){e[g]=function(){(c.s=c.s||[]).push(arguments)};var c=e[g]._={},f=i.methods.length;while(f--){(function(j){e[g][j]=function(){e[g]("call",j,arguments)}})(i.methods[f])}c.l=i.loader;c.i=arguments.callee;c.f=setTimeout(function(){if(c.f){(new Image).src=a+"//"+c.l.replace(".js",".png")+"&"+escape(e.location.href)}c.f=null},20000);c.p={0:+new Date};c.P=function(j){c.p[j]=new Date-c.p[0]};function d(){c.P(b);e[g](b)}e.addEventListener?e.addEventListener(b,d,false):e.attachEvent("on"+b,d);(function(){function l(j){j="head";return["<",j,"></",j,"><",z,' onload="var d=',B,";d.getElementsByTagName('head')[0].",y,"(d.",A,"('script')).",u,"='",a,"//",c.l,"'",'"',"></",z,">"].join("")}var z="body",s=h[z];if(!s){return setTimeout(arguments.callee,100)}c.P(1);var y="appendChild",A="createElement",u="src",r=h[A]("div"),G=r[y](h[A](g)),D=h[A]("iframe"),B="document",C="domain",q;r.style.display="none";s.insertBefore(r,s.firstChild).id=g;D.frameBorder="0";D.id=g+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){D.src="javascript:false"}D.allowTransparency="true";G[y](D);try{D.contentWindow[B].open()}catch(F){i[C]=h[C];q="javascript:var d="+B+".open();d.domain='"+h.domain+"';";D[u]=q+"void(0);"}try{var H=D.contentWindow[B];H.write(l());H.close()}catch(E){D[u]=q+'d.write("'+l().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}c.P(2)})()})()})({loader:(function(a){return "static.olark.com/jsclient/loader0.js?ts="+(a?a[1]:(+new Date))})(document.cookie.match(/olarkld=([0-9]+)/)),name:"olark",methods:["configure","extend","declare","identify"]});olark.identify('4774-994-10-2951');/*]]>{/literal}*/</script><!-- end olark code -->
<script type='text/javascript'>
    olark.configure('system.group', 'e69b6e798098b3a2ae909116555828fb');
    olark('api.box.hide');
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
    var wn = function() {
        $('.pure-form').delay(1000).toggle('drop');
        $('#mensaje').delay(1000).toggle('drop');
    }
    $('#try').click(function(e) {
        e.preventDefault();
        wn();
    });
    $('#submit').click(function() {
        wn();
        nombres = $('#nombres').val();
        telefono = $('#telefono').val();
        template = 'LLAMADA: ' + nombres + ' con el teléfono ' + telefono + ' ha solicitado una llamada, ¿Qué esperas? ¡Shama sha!';
        olark('api.chat.sendNotificationToOperator', {body: template});
    });
</script>
</html>