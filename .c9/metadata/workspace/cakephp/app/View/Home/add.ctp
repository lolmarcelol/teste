{"changed":true,"filter":false,"title":"add.ctp","tooltip":"/cakephp/app/View/Home/add.ctp","value":"<!DOCTYPE HTML>\n<html>\n\t<head>\n\t\t<title>Psiconsultas</title>\n\t\t<meta charset=\"utf-8\" />\n\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\n\t\t<!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->\n\t\t\n\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->\n\t\t<?php\n\t\techo $this->Html->css('bootstrap.min.css');\n\t\techo $this->Html->script('bootstrap.min.js');\n\n\t\techo $this->Html->css('AdminLTE.min.css');\n\t\techo $this->Html->script('adminlte.min.js');\n\n\t\techo $this->fetch('css');\n\t\techo $this->fetch('script');\n\t\t\n\t\t?>\n\t\t<style>\n\t\tbody {\n\t\t   background: url(/cakephp/img/header.jpg) no-repeat center center fixed; \n\t\t  -webkit-background-size: cover;\n\t\t  -moz-background-size: cover;\n\t\t  -o-background-size: cover;\n\t\t  background-size: cover;\n\t\t}\n\t\t</style>\n\t</head>\n\t<body>\n\t\t\n<br>\n<div class=\"col-md-6\">\n    <div class=\"box box-primary col-md-12\">\n        <div class=\"box-header with-border \">\n            <h3 class=\"box-title\">Cadastre-se</h3>\n        </div>\n        <div class=\"row\">\n          <form action=\"/cakephp/psicoterapeutas/add\" id=\"PsicoterapeutaAddForm\" method=\"post\" accept-charset=\"utf-8\">\n              <div style=\"display:none;\">\n                  <input type=\"hidden\" name=\"_method\" value=\"POST\">\n              </div>\n  \n              <div class=\"form-group\">\n                  <div class=\"input text\">\n                      <div class=\"col-md-2\">\n                          <label for=\"PsicoterapeutaNome\">Nome</label>\n                      </div>\n                      <div class=\"col-md-10\">\n                          <input required class=\"form-control\" name=\"data[Psicoterapeuta][nome]\" maxlength=\"45\" type=\"text\" id=\"PsicoterapeutaNome\">\n                      </div>\n                  </div>\n              </div>\n        </div>\n\t\t<hr>\n\t\t<div class=\"row\">\n        <div class=\"form-group\">\n            <div class=\"input text\">\n                <div class=\"col-md-2\">\n                  <label for=\"PsicoterapeutaSobrenome\">Sobrenome</label>\n                </div>\n                <div class=\"col-md-10\">\n                  <input required class=\"form-control\" name=\"data[Psicoterapeuta][sobrenome]\" maxlength=\"45\" type=\"text\" id=\"PsicoterapeutaSobrenome\">\n                </div>\n            </div>\n          </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n          <div class=\"form-group\">\n            <div class=\"input text\">\n                <div class=\"col-md-2\">\n                  <label for=\"PsicoterapeutaCrp\">Crp</label>\n                </div>\n                <div class=\"col-md-10\">\n                  <input required class=\"form-control\" name=\"data[Psicoterapeuta][crp]\" maxlength=\"20\" type=\"text\" id=\"PsicoterapeutaCrp\">\n                </div>\n            </div>\n          </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n            <div class=\"form-group\">\n                <div class=\"input text\">\n                    <div class=\"col-md-2\">\n                      <label for=\"PsicoterapeutaTipoPsicologo\">Tipo Psicologo</label>\n                    </div>\n                    <div class=\"col-md-10\">\n                      <?php echo $this->Form->input('Psicoterapeuta][tipoPsicologo', array('options' => array(\"Basico\", \"Premium\", \"Grupo\", \"Pesquisador\"),'empty' => '(escolha um)','label'=>false,'class'=>'form-control'));?>\n                    </div>\n                </div>\n            </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n            <div class=\"form-group\">\n                <div class=\"input text\">\n                    <div class=\"col-md-2\">\n                      <label for=\"PsicoterapeutaUsername\">Login</label>\n                    </div>\n                    <div class=\"col-md-10\">\n                      <input required class=\"form-control\" name=\"data[Psicoterapeuta][username]\" maxlength=\"40\" type=\"text\" id=\"PsicoterapeutaUsername\">\n                    </div>\n                </div>\n            </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n            <div class=\"form-group\">\n                <div class=\"input text\">\n                    <div class=\"col-md-2\">\n                      <label for=\"PsicoterapeutaPassword\">Senha</label>\n                    </div>\n                    <div class=\"col-md-10\">\n                      <input required class=\"form-control\" name=\"data[Psicoterapeuta][password]\" maxlength=\"40\" type=\"text\" id=\"PsicoterapeutaPassword\">\n                    </div>\n                </div>\n            </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n            <div class=\"form-group\">\n                <div class=\"input email\">\n                    <div class=\"col-md-2\">\n                      <label for=\"PsicoterapeutaEmail\">Email</label>\n                    </div>\n                    <div class=\"col-md-10\">\n                      <input required class=\"form-control\" name=\"data[Psicoterapeuta][email]\" maxlength=\"45\" type=\"email\" id=\"PsicoterapeutaEmail\">\n                    </div>\n                </div>\n            </div>\n    </div>\n    <hr>\n    <div class=\"row\">\n            <div class=\"form-group\">\n                <div class=\"submit\">\n                  <input class=\"btn btn-success\" type=\"submit\" value=\"Efetuar cadastro\">\n                </div>\n            </div>\n    </div>\n          </form>\n\n      </div>\n</div>\n\n\t</body>\n</html>","undoManager":{"mark":-2,"position":100,"stack":[[{"start":{"row":90,"column":75},"end":{"row":90,"column":77},"action":"insert","lines":["\"\""],"id":81}],[{"start":{"row":90,"column":76},"end":{"row":90,"column":77},"action":"insert","lines":["P"],"id":82}],[{"start":{"row":90,"column":77},"end":{"row":90,"column":78},"action":"insert","lines":["e"],"id":83}],[{"start":{"row":90,"column":78},"end":{"row":90,"column":79},"action":"insert","lines":["s"],"id":84}],[{"start":{"row":90,"column":79},"end":{"row":90,"column":80},"action":"insert","lines":["q"],"id":85}],[{"start":{"row":90,"column":80},"end":{"row":90,"column":81},"action":"insert","lines":["u"],"id":86}],[{"start":{"row":90,"column":81},"end":{"row":90,"column":82},"action":"insert","lines":["i"],"id":87}],[{"start":{"row":90,"column":82},"end":{"row":90,"column":83},"action":"insert","lines":["s"],"id":88}],[{"start":{"row":90,"column":83},"end":{"row":90,"column":84},"action":"insert","lines":["a"],"id":89}],[{"start":{"row":90,"column":84},"end":{"row":90,"column":85},"action":"insert","lines":["d"],"id":90}],[{"start":{"row":90,"column":85},"end":{"row":90,"column":86},"action":"insert","lines":["o"],"id":91}],[{"start":{"row":90,"column":86},"end":{"row":90,"column":87},"action":"insert","lines":["r"],"id":92}],[{"start":{"row":90,"column":88},"end":{"row":90,"column":89},"action":"remove","lines":[","],"id":93}],[{"start":{"row":90,"column":88},"end":{"row":90,"column":89},"action":"remove","lines":[" "],"id":94}],[{"start":{"row":90,"column":88},"end":{"row":90,"column":89},"action":"remove","lines":["5"],"id":95}],[{"start":{"row":91,"column":51},"end":{"row":91,"column":52},"action":"insert","lines":[","],"id":96}],[{"start":{"row":91,"column":52},"end":{"row":92,"column":0},"action":"insert","lines":["",""],"id":97},{"start":{"row":92,"column":0},"end":{"row":92,"column":26},"action":"insert","lines":["                          "]}],[{"start":{"row":92,"column":26},"end":{"row":92,"column":28},"action":"insert","lines":["''"],"id":98}],[{"start":{"row":92,"column":27},"end":{"row":92,"column":28},"action":"insert","lines":["l"],"id":99}],[{"start":{"row":92,"column":28},"end":{"row":92,"column":29},"action":"insert","lines":["a"],"id":100}],[{"start":{"row":92,"column":29},"end":{"row":92,"column":30},"action":"insert","lines":["y"],"id":101}],[{"start":{"row":92,"column":30},"end":{"row":92,"column":31},"action":"insert","lines":["e"],"id":102}],[{"start":{"row":92,"column":31},"end":{"row":92,"column":32},"action":"insert","lines":["r"],"id":103}],[{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"insert","lines":[","],"id":104}],[{"start":{"row":92,"column":34},"end":{"row":92,"column":35},"action":"insert","lines":["f"],"id":105}],[{"start":{"row":92,"column":35},"end":{"row":92,"column":36},"action":"insert","lines":["a"],"id":106}],[{"start":{"row":92,"column":36},"end":{"row":92,"column":37},"action":"insert","lines":["l"],"id":107}],[{"start":{"row":92,"column":37},"end":{"row":92,"column":38},"action":"insert","lines":["s"],"id":108}],[{"start":{"row":92,"column":38},"end":{"row":92,"column":39},"action":"insert","lines":["e"],"id":109}],[{"start":{"row":92,"column":39},"end":{"row":92,"column":40},"action":"insert","lines":[";"],"id":110}],[{"start":{"row":92,"column":39},"end":{"row":92,"column":40},"action":"remove","lines":[";"],"id":111}],[{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"remove","lines":[","],"id":112}],[{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"insert","lines":["="],"id":113}],[{"start":{"row":92,"column":34},"end":{"row":92,"column":35},"action":"insert","lines":[">"],"id":114}],[{"start":{"row":92,"column":27},"end":{"row":92,"column":32},"action":"remove","lines":["layer"],"id":115},{"start":{"row":92,"column":27},"end":{"row":92,"column":28},"action":"insert","lines":["l"]}],[{"start":{"row":92,"column":28},"end":{"row":92,"column":29},"action":"insert","lines":["a"],"id":116}],[{"start":{"row":92,"column":29},"end":{"row":92,"column":30},"action":"insert","lines":["b"],"id":117}],[{"start":{"row":92,"column":30},"end":{"row":92,"column":31},"action":"insert","lines":["e"],"id":118}],[{"start":{"row":92,"column":31},"end":{"row":92,"column":32},"action":"insert","lines":["l"],"id":119}],[{"start":{"row":92,"column":40},"end":{"row":92,"column":41},"action":"insert","lines":[","],"id":120}],[{"start":{"row":92,"column":41},"end":{"row":93,"column":0},"action":"insert","lines":["",""],"id":121},{"start":{"row":93,"column":0},"end":{"row":93,"column":26},"action":"insert","lines":["                          "]}],[{"start":{"row":93,"column":26},"end":{"row":93,"column":28},"action":"insert","lines":["''"],"id":122}],[{"start":{"row":93,"column":27},"end":{"row":93,"column":28},"action":"insert","lines":["n"],"id":123}],[{"start":{"row":93,"column":28},"end":{"row":93,"column":29},"action":"insert","lines":["a"],"id":124}],[{"start":{"row":93,"column":29},"end":{"row":93,"column":30},"action":"insert","lines":["m"],"id":125}],[{"start":{"row":93,"column":30},"end":{"row":93,"column":31},"action":"insert","lines":["e"],"id":126}],[{"start":{"row":93,"column":32},"end":{"row":93,"column":33},"action":"insert","lines":["="],"id":127}],[{"start":{"row":93,"column":33},"end":{"row":93,"column":34},"action":"insert","lines":[">"],"id":128}],[{"start":{"row":95,"column":0},"end":{"row":96,"column":0},"action":"remove","lines":["                      <input required class=\"form-control\" name=\"data[Psicoterapeuta][tipoPsicologo]\" maxlength=\"40\" type=\"text\" id=\"PsicoterapeutaTipoPsicologo\">",""],"id":129}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":26},"action":"remove","lines":["                          "],"id":130}],[{"start":{"row":90,"column":90},"end":{"row":91,"column":0},"action":"remove","lines":["",""],"id":131}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":26},"action":"remove","lines":["                          "],"id":132}],[{"start":{"row":90,"column":116},"end":{"row":91,"column":0},"action":"remove","lines":["",""],"id":133}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":26},"action":"remove","lines":["                          "],"id":134}],[{"start":{"row":90,"column":131},"end":{"row":91,"column":0},"action":"remove","lines":["",""],"id":135}],[{"start":{"row":90,"column":131},"end":{"row":90,"column":139},"action":"remove","lines":["'name'=>"],"id":136}],[{"start":{"row":90,"column":130},"end":{"row":90,"column":131},"action":"remove","lines":[","],"id":137}],[{"start":{"row":90,"column":130},"end":{"row":91,"column":0},"action":"remove","lines":["",""],"id":138}],[{"start":{"row":90,"column":130},"end":{"row":90,"column":152},"action":"remove","lines":["                      "],"id":139}],[{"start":{"row":89,"column":89},"end":{"row":90,"column":0},"action":"remove","lines":["",""],"id":140}],[{"start":{"row":89,"column":89},"end":{"row":89,"column":115},"action":"remove","lines":["                          "],"id":141}],[{"start":{"row":89,"column":193},"end":{"row":89,"column":194},"action":"insert","lines":[","],"id":142}],[{"start":{"row":89,"column":194},"end":{"row":89,"column":195},"action":"insert","lines":["'"],"id":143},{"start":{"row":89,"column":195},"end":{"row":89,"column":196},"action":"insert","lines":["'"]}],[{"start":{"row":89,"column":195},"end":{"row":89,"column":196},"action":"insert","lines":["c"],"id":145}],[{"start":{"row":89,"column":196},"end":{"row":89,"column":197},"action":"insert","lines":["l"],"id":146}],[{"start":{"row":89,"column":197},"end":{"row":89,"column":198},"action":"insert","lines":["a"],"id":147}],[{"start":{"row":89,"column":198},"end":{"row":89,"column":199},"action":"insert","lines":["s"],"id":148}],[{"start":{"row":89,"column":199},"end":{"row":89,"column":200},"action":"insert","lines":["s"],"id":149}],[{"start":{"row":89,"column":201},"end":{"row":89,"column":202},"action":"insert","lines":["="],"id":150}],[{"start":{"row":89,"column":202},"end":{"row":89,"column":203},"action":"insert","lines":[">"],"id":151}],[{"start":{"row":89,"column":203},"end":{"row":89,"column":204},"action":"insert","lines":["'"],"id":152},{"start":{"row":89,"column":204},"end":{"row":89,"column":205},"action":"insert","lines":["'"]}],[{"start":{"row":89,"column":204},"end":{"row":89,"column":216},"action":"insert","lines":["form-control"],"id":153}],[{"start":{"row":89,"column":53},"end":{"row":89,"column":54},"action":"insert","lines":["["],"id":154}],[{"start":{"row":89,"column":68},"end":{"row":89,"column":69},"action":"insert","lines":["]"],"id":155}],[{"start":{"row":89,"column":69},"end":{"row":89,"column":70},"action":"insert","lines":["["],"id":156}],[{"start":{"row":89,"column":83},"end":{"row":89,"column":84},"action":"insert","lines":["]"],"id":157}],[{"start":{"row":89,"column":53},"end":{"row":89,"column":54},"action":"remove","lines":["["],"id":158}],[{"start":{"row":89,"column":67},"end":{"row":89,"column":68},"action":"remove","lines":["]"],"id":159}],[{"start":{"row":89,"column":67},"end":{"row":89,"column":68},"action":"remove","lines":["["],"id":160}],[{"start":{"row":89,"column":80},"end":{"row":89,"column":81},"action":"remove","lines":["]"],"id":161}],[{"start":{"row":89,"column":67},"end":{"row":89,"column":68},"action":"insert","lines":["}"],"id":162}],[{"start":{"row":89,"column":67},"end":{"row":89,"column":68},"action":"remove","lines":["}"],"id":163}],[{"start":{"row":89,"column":67},"end":{"row":89,"column":68},"action":"insert","lines":["]"],"id":164}],[{"start":{"row":89,"column":68},"end":{"row":89,"column":69},"action":"insert","lines":["["],"id":165}],[{"start":{"row":89,"column":69},"end":{"row":89,"column":70},"action":"remove","lines":["T"],"id":166}],[{"start":{"row":89,"column":69},"end":{"row":89,"column":70},"action":"insert","lines":["t"],"id":167}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":174},"action":"remove","lines":["choose"],"id":168}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":169},"action":"remove","lines":[" "],"id":169}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":169},"action":"remove","lines":["o"],"id":170}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":169},"action":"remove","lines":["n"],"id":171}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":169},"action":"remove","lines":["e"],"id":172}],[{"start":{"row":89,"column":168},"end":{"row":89,"column":169},"action":"insert","lines":["e"],"id":173}],[{"start":{"row":89,"column":169},"end":{"row":89,"column":170},"action":"insert","lines":["s"],"id":174}],[{"start":{"row":89,"column":170},"end":{"row":89,"column":171},"action":"insert","lines":["c"],"id":175}],[{"start":{"row":89,"column":171},"end":{"row":89,"column":172},"action":"insert","lines":["o"],"id":176}],[{"start":{"row":89,"column":172},"end":{"row":89,"column":173},"action":"insert","lines":["l"],"id":177}],[{"start":{"row":89,"column":173},"end":{"row":89,"column":174},"action":"insert","lines":["h"],"id":178}],[{"start":{"row":89,"column":174},"end":{"row":89,"column":175},"action":"insert","lines":["a"],"id":179}],[{"start":{"row":89,"column":175},"end":{"row":89,"column":176},"action":"insert","lines":[" "],"id":180}],[{"start":{"row":89,"column":176},"end":{"row":89,"column":177},"action":"insert","lines":["u"],"id":181}],[{"start":{"row":89,"column":177},"end":{"row":89,"column":178},"action":"insert","lines":["m"],"id":182}]]},"ace":{"folds":[],"scrolltop":978.2726726531982,"scrollleft":0,"selection":{"start":{"row":77,"column":22},"end":{"row":77,"column":22},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1509760496000}