@extends('Layouts.master')
@section('content')
    <section class="portfolio-section">
        <h2>
            Portfolio
        </h2>
        <div class="container">
            <!--         <h2 class="title">Portfolio</h2> -->
            <span class="hr-role"></span>
            <div class="portfolio-tab">
                <ul id="filters" class="clearfix">
                    <li class="filter active" data-filter=".laravel, .design, .react">
                        all
                    </li>
                    <li class="filter" data-filter=".laravel">Laravel</li>
                    <li class="filter" data-filter=".react">React Js</li>
                    <li class="filter" data-filter=".design">Web Design</li>
                </ul>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio laravel" data-cat="laravel"
                    style="background-image:url('assets/images/laravel5.png'); background-size: cover; margin:8px">
                    <div class="portfolio-wrapper first">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 class="project-title" style="color:white">Coders Community</h4>
                                <span class="text-category">laravel</span>
                                <a href="http://coders-community.nh-dalim.com/" class="template-btn"
                                    target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio design" data-cat="design"
                    style="background-image:url('assets/images/accureng.png'); background-size: cover; margin:8px">
                    <div class="portfolio-wrapper second">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Accureng</h4>
                                <span class="text-category">Design</span>
                                <a href="https://dali0023.github.io/accureng/index.html" class="template-btn"
                                    target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio react" data-cat="react"
                    style="background-image:url('assets/images/laravel1.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper third">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Blogger</h4>
                                <span class="text-category">React</span>
                                <a href="#" class="template-btn" target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio design" data-cat="design"
                    style="background-image:url('assets/images/argyros.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper second">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Argyros</h4>
                                <span class="text-category">Web Design</span>
                                <a href="https://dali0023.github.io/argyros" class="template-btn" target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio react" data-cat="react"
                    style="background-image:url('assets/images/react.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper third">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Budget Calculator</h4>
                                <span class="text-category">React Js</span>
                                <a href="https://react-hooks-budget-calcutor.netlify.app/" class="template-btn"
                                    target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio design" data-cat="design"
                    style="background-image:url('assets/images/call.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper second">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Callas</h4>
                                <span class="text-category">Web Design</span>
                                <a href="https://dali0023.github.io/callas/" class="template-btn" target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio laravel" data-cat="laravel"
                    style="background-image:url('assets/images/laravel3.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper first">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">dalin</h4>
                                <span class="text-category">laravel</span>
                                <a href="http://dalin.nh-dalim.com/" class="template-btn" target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>

                <div class="portfolio design" data-cat="design"
                    style="background-image:url('assets/images/antles.png'); background-size: cover;margin:8px">
                    <div class="portfolio-wrapper second">
                        <div class="portfolio-bg"></div>
                        <div class="label">
                            <div class="label-text">
                                <h4 style="color:white">Antles</h4>
                                <span class="text-category">Web Design</span>
                                <a href="https://dali0023.github.io/antles/" class="template-btn"
                                    target="_blank">View</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
