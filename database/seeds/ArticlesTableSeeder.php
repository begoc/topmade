<?php


use Illuminate\Database\Seeder;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Topmade\Commands\StoreArticle;

class ArticlesTableSeeder extends Seeder
{
    use DispatchesCommands;

    public function run()
    {
        $articles = [
            [
                'icon' => 'university',
                'title' => 'Empresa',
                'handler' => 'company',
                'header' => 'certificada en ISO 9001:2000 y 14001:2000',
                'content' => '
                    <div class="col-lg-4">
                        <p class="text-muted large">TOPMADE es una empresa dedicada al diseño, instalación y mantenimiento de aire acondicionado calefacción y ACS, energía solar térmica y fotovoltaica.</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-muted large">Actuamos en el área comercial, industrial y doméstico tanto para entidades públicas como privadas. Con más de 15 años de experiencia en instalaciones y mantenimientos.</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-muted large">Nuestro ámbito de actuación se extiende a las comunidades de Valenciana, Murcia, Madrid, Aragón, Castilla la Mancha y otros como Castilla León, Andalucía o La Rioja.</p>
                    </div>
                '
            ],
            [
                'icon' => 'tasks',
                'title' => 'Actividades',
                'handler' => 'activities',
                'header' => 'Contamos con las mejores y más avanzadas tecnologías',
                'content' => '
                    <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-compass fa-stack-1x fa-inverse"></i>
                            </span>
                        <h4 class="service-heading">Climatización</h4>
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Aire acondicionado</li>
                            <li class="list-group-item text-muted">Ventilación</li>
                            <li class="list-group-item text-muted">Calefacción</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-fire fa-stack-1x fa-inverse"></i>
                            </span>
                        <h4 class="service-heading">Incendios</h4>
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Alarmas contra incendios</li>
                            <li class="list-group-item text-muted">Domótica</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                            </span>
                        <h4 class="service-heading">Mantenimiento</h4>
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Asistencia técnica</li>
                            <li class="list-group-item text-muted">Mantenimiento correctivo</li>
                            <li class="list-group-item text-muted">Mantenimiento preventivo</li>
                            <li class="list-group-item text-muted">Analíticas ambientales</li>
                        </ul>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-flash fa-stack-1x fa-inverse"></i>
                            </span>
                        <h4 class="service-heading">Electricidad</h4>
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Gas</li>
                            <li class="list-group-item text-muted">Gasoil</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                            </span>
                        <h4 class="service-heading">Energía Renovable</h4>
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Solar</li>
                            <li class="list-group-item text-muted">Biomasa</li>
                        </ul>
                    </div>
                </div>
                '
            ],
            [
                'icon' => 'users',
                'title' => 'Clientes',
                'handler' => 'clients',
                'header' => 'Contamos con la confianza de clientes como',
                'content' => '
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.adif.es/">
                                <img src="img/clientes/adif.gif" class="img-responsive img-centered" alt="Adif">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.renfe.com/">
                                <img src="img/clientes/renfe.png" class="img-responsive img-centered" alt="Renfe">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.urbem.es/">
                                <img src="img/clientes/urbem.jpg" class="img-responsive img-centered" alt="Urbem">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.prieto.es/">
                                <img src="img/clientes/prieto.gif" class="img-responsive img-centered" alt="Perfumerías Prieto">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="https://www.cellnextelecom.com/">
                                <img src="img/clientes/abertistelecom.png" class="img-responsive img-centered" alt="CELLNEX">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.agenciatributaria.es/">
                                <img src="img/clientes/agencia-tributaria.png" class="img-responsive img-centered" alt="Agencia Tributaria">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-4 col-xs-4 img-grid">
                            <img src="img/clientes/constructora-hispanica.png" class="img-responsive img-centered" alt="Constructora Hispanica">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 img-grid">
                            <img src="img/clientes/dalmau.jpg" class="img-responsive img-centered" alt="Medio Ambiente Dalmau">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.siliken.com/">
                                <img src="img/clientes/siliken.gif" class="img-responsive img-centered" alt="Siliken">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.grupo-iberica.com/">
                                <img src="img/clientes/grupo-iberica.png" class="img-responsive img-centered" alt="Ibérica de Automóvil">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.necobuffet.com/">
                                <img src="img/clientes/neco.jpg" class="img-responsive img-centered" alt="Franquicias Neco">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.fomesa.net/">
                                <img src="img/clientes/fomesa.png" class="img-responsive img-centered" alt="Fomesa">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://acanto.es/empresa_instalaciones_acanto.htm">
                                <img src="img/clientes/acanto.jpg" class="img-responsive img-centered" alt="Acanto instalaciones">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-xs-6 img-grid">
                            <a href="http://www.fgv.es/">
                                <img src="img/clientes/fgv.png" class="img-responsive img-centered" alt="Ferrocarrils de la Generalitat Valenciana">
                            </a>
                        </div>
                    </div>
                '
            ]
        ];

        foreach ($articles as $article) {
            $this->dispatchFromArray(StoreArticle::CLASSNAME, $article);
        }
    }
}
