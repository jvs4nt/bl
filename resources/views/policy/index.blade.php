@extends('layouts.basic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img style="width:250px" src="{{ asset('img/logo.svg') }}" alt="Logotipo">           
        <div class="col-md-12 p-2">
            <div class="card radius-20 rounded default-bg" style="border: 0px solid #fff">

                <div class="card-body p-4 bg-white" style="border-radius: 20px; border: 0px solid #fff">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-5">
                        <h4>{{ __('Política de Privacidade') }}</h4>
                        <p>Última atualização: 19 de junho de 2024</p>
                    </div>

                    <p>
                    {{ __('Bem vindo ao sistema BLINCE!') }}
                    </p>
                    <p>Blince Business valoriza a privacidade e a proteção dos dados pessoais de seus clientes, parceiros e usuários. Esta Política de Privacidade tem como objetivo explicar como coletamos, usamos, armazenamos e protegemos suas informações pessoais, em conformidade com a Lei Geral de Proteção de Dados (LGPD) - Lei nº 13.709/2018.</p>

                    
                    <div>
                        <p class="fw-bold">1. Informações coletadas</p>
                        <p>1.1. Dados Pessoais Fornecidos Diretamente pelo Usuário:</p>
                        <ul>
                            <li>Nome completo</li>
                            <li>Endereço de e-mail</li>
                            <li>Número de telefone</li>
                            <li>Endereço</li>
                            <li>Informações de pagamento</li>
                        </ul>
                        <p>1.2. Dados Coletados Automaticamente:</p>
                        <ul>
                            <li>Endereço IP</li>
                            <li>Dados de localização geográfica</li>
                            <li>Histórico de navegação e interações no site</li>
                            <li>Informações sobre o dispositivo (tipo, sistema operacional, navegador)</li>
                        </ul>
                    </div>
                    
                    <div>
                        <p class="fw-bold">2. Finalidades da Coleta de Dados</p>
                        <p>Utilizamos os dados pessoais para as seguintes finalidades:</p>
                        <ul>
                            <li>Prestação de serviços contratados</li>
                            <li>Comunicação com os usuários, incluindo envio de informações sobre produtos, serviços e promoções</li>
                            <li>Melhoria da experiência do usuário no site</li>
                            <li>Realização de análises e estudos de mercado</li>
                            <li>Cumprimento de obrigações legais e regulatórias</li>
                        </ul>
                    </div>
                    
                    <div>
                        <p class="fw-bold">3. Compartilhamento de Dados</p>
                        <p>Blince Business não vende, aluga ou compartilha dados pessoais com terceiros, exceto nos seguintes casos:</p>
                        <ul>
                            <li>Quando necessário para a prestação de serviços contratados (por exemplo, processadores de pagamento)</li>
                            <li>Para cumprimento de obrigações legais ou regulatórias</li>
                            <li>Com parceiros de negócios para fins de marketing, mediante o consentimento prévio do usuário</li>
                        </ul>
                    </div>
                    
                    <div>
                        <p class="fw-bold">4. Direitos dos Titulares de Dados</p>
                        <p>De acordo com a LGPD, os titulares dos dados têm os seguintes direitos:</p>
                        <ul>
                            <li>Acesso aos seus dados pessoais</li>
                            <li>Correção de dados incompletos, inexatos ou desatualizados</li>
                            <li>Anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade com a lei</li>
                            <li>Portabilidade dos dados a outro fornecedor de serviço ou produto</li>
                            <li>Eliminação dos dados pessoais tratados com o consentimento do titular</li>
                            <li>Informação sobre as entidades com as quais seus dados foram compartilhados</li>
                            <li>Informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa</li>
                            <li>Revogação do consentimento</li>
                        </ul>
                        <p>Para exercer esses direitos, entre em contato conosco através do e-mail: [email protected]</p>
                    </div>
                   
                    <div>
                        <p class="fw-bold">5. Segurança dos Dados</p>
                        <p>Blince Business adota medidas de segurança adequadas para proteger os dados pessoais contra acesso não autorizado, perda, alteração ou destruição. Entre as medidas adotadas estão:</p>
                        <ul>
                            <li>Uso de criptografia em dados sensíveis</li>
                            <li>Controle de acesso a informações</li>
                            <li>Monitoramento contínuo de sistemas</li>
                        </ul>
                    </div>
                    

                    <div class="d-flex gap-2 mt-5 check">
                        <input type="checkbox" id="accept" name="accept" />
                        <label for="accept">Aceito os Termos de Uso e a Política de Privacidade</label>
                    </div>

                    <div class="d-flex gap-5 mt-5 buttons">
                        <a class="policy-button" id="print-button" href="javascript:void(0)">Imprimir</a>
                        <a 
                            class="policy-button" 
                            href="{{ route('home') }}" 
                        >
                                Continuar
                        </a>
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
