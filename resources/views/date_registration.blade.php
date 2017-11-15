@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

    <section>

            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="nav-item">
                    <a href="#step1" class="nav-link active" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            1
                        </a>
                </li>

                <li role="presentation" class="nav-item">
                    <a href="#step2" class="nav-link disabled" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            2
                        </a>
                </li>

                <li role="presentation" class="nav-item">
                    <a href="#step3" class="nav-link disabled" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            3
                        </a>
                </li>
            </ul>


                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step 1</h3>
                        <p>This is step 1</p>
                        <ul class="list-inline pull-xs-right">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary next-step">Save and continue</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>
                        <p>This is step 2</p>
                        <ul class="pull-xs-right">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-default prev-step">Previous</button>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary next-step">Save and continue</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>This is step 3</p>
                        <ul class="pull-xs-right">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-default prev-step">Previous</button>
                            </li>
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-primary next-step">Save and continue</button>
                            </li>
                        </ul>
                    </div>

                </div>

        </section>
      </div>
</div>
@endsection


@section('js')
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.nav-tabs li > a.active');
        $active.parent().next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.nav-tabs li>a.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).parent().next().find('a[data-toggle="tab"]').click();

}
function prevTab(elem) {
    $(elem).parent().prev().find('a[data-toggle="tab"]').click();
}
</script>
@endsection
