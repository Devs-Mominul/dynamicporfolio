@extends('frontend.master')
@section('frontend')
<div class="col-12 col-md-12 col-lg-10">
    <div class="box box-content">
        <div class="pb-2">
            <h1 class="title title--h1 first-title title__separate">Resume</h1>
        </div>

        <!-- Experience -->
        <div class="row">
            <div class="col-12">
                <h2 class="title title--h3"><img class="title-icon" src="https://art-template.ru/vcard3/assets/icons/dark/icon-education.svg" alt="" /> Education</h2>
                <div class="timeline">
                    <!-- Item -->
                    @foreach ($educations as $education)
                    <article class="timeline__item">
                        <h5 class="title title--h5 timeline__title">{{ $education->academy_name }}</h5>
                        <span class="timeline__period">{{ $education->year }}</span>
                        <p class="timeline__description">{{ $education->paragraph }}.</p>
                    </article>

                    @endforeach



                </div>
            </div>

            <div class="col-12">
                <h2 class="title title--h3"><img class="title-icon" src="https://art-template.ru/vcard3/assets/icons/dark/icon-experience.svg" alt="" /> Experience</h2>
                <div class="timeline">
                    <!-- Item -->
                   @foreach ($exprience as $exprience)
                   <article class="timeline__item">
                    <h5 class="title title--h5 timeline__title">{{ $exprience->title }}</h5>
                    <span class="timeline__period">{{ $exprience->year }}</span>
                    <p class="timeline__description">{{ $exprience->paragraph }}.</p>
                </article>

                   @endforeach


                </div>
            </div>
        </div>

        <!-- Skills -->
        <div class="row">
            <div class="col-12">
                <h2 class="title title--h3">My Skills</h2>
                <div class="box box__border">
                    <!-- Progress -->
                    @foreach ($skill as $skill)
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->parcentage }}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-text"><span>{{ $skill->title }}</span><span>{{ $skill->parcentage }}%</span></div>
                        </div>
                        <div class="progress-text"><span>{{ $skill->title }}</span></div>
                    </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">© 2024 MominulHaque</footer>
</div>

@endsection
