@extends('navs')

@section('title', 'Smart Room')

@section('content')

<div class="dashboard">

    <!-- CABEÇALHO -->
    <div class="dashboard-header">

        <div>
            <span class="dashboard-subtitle">
                PAINEL DE CONTROLE
            </span>

            <h1>Visão Geral</h1>

            <p>
                Monitore os ambientes e dispositivos da Smart Room em tempo real.
            </p>
        </div>

        <div class="system-status">
            <span class="status-dot"></span>
            <span>Arduino conectado</span>
        </div>

    </div>


    <!-- CARDS PRINCIPAIS -->
    <div class="row g-4">

        <!-- TEMPERATURA -->
        <div class="col-12 col-md-6 col-xl-3">

            <div class="room-card temperature-card">

                <div class="card-top">
                    <div class="card-icon">
                        <i class="bi bi-thermometer-half"></i>
                    </div>

                    <span class="card-label">
                        TEMPERATURA
                    </span>
                </div>

                <div class="card-value">
                    23.3 <small>°C</small>
                </div>

                <div class="card-description">
                    <i class="bi bi-check2"></i>
                    Temperatura normal
                </div>

            </div>

        </div>


        <!-- ILUMINAÇÃO -->
        <div class="col-12 col-md-6 col-xl-3">

            <div class="room-card lighting-card">

                <div class="card-top">

                    <div class="card-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>

                    <span class="card-label">
                        ILUMINAÇÃO
                    </span>

                </div>

                <div class="card-value">
                    ON
                </div>

                <div class="card-bottom">

                    <span class="card-description">
                        Controle manual
                    </span>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked>
                    </div>

                </div>

            </div>

        </div>


        <!-- PRESENÇA -->
        <div class="col-12 col-md-6 col-xl-3">

            <div class="room-card presence-card">

                <div class="card-top">

                    <div class="card-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <span class="card-label">
                        PRESENÇA
                    </span>

                </div>

                <div class="card-value">
                    SIM
                </div>

                <div class="card-description">
                    Sala ocupada · sensor PIR ativo
                </div>

            </div>

        </div>


        <!-- AR CONDICIONADO -->
        <div class="col-12 col-md-6 col-xl-3">

            <div class="room-card air-card">

                <div class="card-top">

                    <div class="card-icon">
                        <i class="bi bi-snow"></i>
                    </div>

                    <span class="card-label">
                        AR-CONDICIONADO
                    </span>

                </div>

                <div class="card-value">
                    ON
                </div>

                <div class="card-bottom">

                    <span class="card-description">
                        Controle manual
                    </span>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- SEGUNDA LINHA -->
    <div class="row g-4 mt-1">

        <!-- UMIDADE -->
        <div class="col-12 col-lg-4">

            <div class="info-card">

                <div class="card-top">

                    <div class="card-icon blue">
                        <i class="bi bi-droplet-fill"></i>
                    </div>

                    <span class="card-label">
                        UMIDADE RELATIVA
                    </span>

                </div>

                <div class="large-value">
                    58<small>%</small>
                </div>

                <div class="progress room-progress">
                    <div class="progress-bar"
                         role="progressbar"
                         style="width: 58%">
                    </div>
                </div>

                <div class="range-labels">
                    <span>Seco</span>
                    <span>Ideal</span>
                    <span>Úmido</span>
                </div>

            </div>

        </div>


        <!-- SETPOINT -->
        <div class="col-12 col-lg-4">

            <div class="info-card">

                <div class="card-top">

                    <div class="card-icon blue">
                        <i class="bi bi-sliders"></i>
                    </div>

                    <span class="card-label">
                        SETPOINT DO AC
                    </span>

                </div>

                <div class="large-value">
                    22<small>°C</small>
                </div>

                <input type="range"
                       class="form-range"
                       min="16"
                       max="30"
                       value="22">

                <div class="range-labels">
                    <span>16°C</span>
                    <span>30°C</span>
                </div>

            </div>

        </div>


        <!-- RESUMO -->
        <div class="col-12 col-lg-4">

            <div class="info-card">

                <div class="card-top">
                    <span class="card-label">
                        RESUMO DA SALA
                    </span>
                </div>

                <div class="summary-list">

                    <div>
                        <span>Dispositivos ativos</span>
                        <strong>2 / 2</strong>
                    </div>

                    <div>
                        <span>Sensores online</span>
                        <strong>5 / 5</strong>
                    </div>

                    <div>
                        <span>Uptime Arduino</span>
                        <strong>4h 32m</strong>
                    </div>

                    <div>
                        <span>Última leitura</span>
                        <strong>12:52:47</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- TERCEIRA LINHA -->
    <div class="row g-4 mt-1">

        <!-- HISTÓRICO -->
        <div class="col-12 col-lg-8">

            <div class="info-card history-card">

                <div class="section-header">

                    <div>
                        <h3>Temperatura — Histórico</h3>

                        <p>
                            Últimas leituras registradas
                        </p>
                    </div>

                    <span class="current-temperature">
                        23.3°C
                    </span>

                </div>

                <div class="fake-chart">

                    <div class="chart-line"></div>

                    <div class="chart-label top">
                        25°C
                    </div>

                    <div class="chart-label middle">
                        23°C
                    </div>

                    <div class="chart-label bottom">
                        21°C
                    </div>

                </div>

            </div>

        </div>


        <!-- LOG -->
        <div class="col-12 col-lg-4">

            <div class="info-card log-card">

                <div class="section-header">

                    <div>
                        <h3>Log de Eventos</h3>

                        <p>
                            Atividades recentes
                        </p>
                    </div>

                </div>

                <div class="event-list">

                    <div class="event">
                        <span class="event-icon success">
                            <i class="bi bi-check-lg"></i>
                        </span>

                        <div>
                            <strong>Luz ligada</strong>
                            <small>Administrador · 12:52:12</small>
                        </div>
                    </div>


                    <div class="event">
                        <span class="event-icon success">
                            <i class="bi bi-check-lg"></i>
                        </span>

                        <div>
                            <strong>Ar-condicionado ligado</strong>
                            <small>Administrador · 12:51:48</small>
                        </div>
                    </div>


                    <div class="event">
                        <span class="event-icon info">
                            <i class="bi bi-info-lg"></i>
                        </span>

                        <div>
                            <strong>Presença detectada</strong>
                            <small>Sensor PIR · 12:51:22</small>
                        </div>
                    </div>


                    <div class="event">
                        <span class="event-icon success">
                            <i class="bi bi-check-lg"></i>
                        </span>

                        <div>
                            <strong>Sistema inicializado</strong>
                            <small>Arduino · 12:50:05</small>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- STATUS DO ARDUINO -->
    <div class="arduino-status">

        <div class="arduino-info">

            <div class="arduino-icon">
                <i class="bi bi-cpu"></i>
            </div>

            <div>
                <strong>Arduino UNO</strong>

                <span>
                    <span class="status-dot"></span>
                    Conectado · COM3 · 9600 baud
                </span>
            </div>

        </div>

        <span class="firmware">
            Firmware v2.1.4
        </span>

    </div>

</div>

@endsection