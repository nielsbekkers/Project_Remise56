@extends('layouts.personeel_layout')

@section('extra_css')
    <link rel="stylesheet" href="../scheduler/dhtmlxscheduler.css" type="text/css">
    <style>
        #scheduler {
            height:700px;
        }
    </style>

@section('content')
    <div class="col-md-12">
        @if(isset($errorReport))
            <div id="errorReport" class="alert alert-danger">
                <ax class="close" data-dismiss="alert" aria-label="close">&times;</ax>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{$errorReport}}
            </div>
        @endif
        <div id="scheduler" class="dhx_cal_container">
            <div class="dhx_cal_navline">
                <div class="dhx_cal_prev_button">&nbsp;</div>
                <div class="dhx_cal_next_button">&nbsp;</div>
                <div class="dhx_cal_today_button"></div>
                <div class="dhx_cal_date"></div>
                <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
            </div>
            <div class="dhx_cal_header"></div>
            <div class="dhx_cal_data"></div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../scheduler/dhtmlxscheduler.js" type="text/javascript"></script>
    <script src="../scheduler/sources/locale/locale_nl.js" charset="utf-8"></script>
    <script src="../scheduler/sources/locale/recurring/locale_recurring_nl.js" ></script>
    <script type="text/javascript">
        scheduler.config.dblclick_create = false;
        scheduler.config.xml_date = "%Y-%m-%d %H:%i";
        scheduler.config.readonly = true;

        scheduler.init('scheduler', new Date(),"day");
    </script>
    <script type="text/javascript">var events = [
                @forelse($reservaties as $reservatie)
                <?php
                $date = new DateTime($reservatie->datum);
                $date->add(new DateInterval('PT6H'));
                $reservatie->eindDatum = $date->format('Y-m-d H:i:s');
                $text = $reservatie->achternaam.' '.$reservatie->voornaam.' Aantal personen: '.$reservatie->aantal_personen;
                ?>
            {id:"{{$reservatie->id}}", text:"{{$text}}", start_date:"{{$reservatie->datum}}",
                end_date:"{{$reservatie->eindDatum}}}"},
            @empty

            @endforelse

        ];
    scheduler.parse(events, 'json');</script>

    <script>
        $(document).ready(function(){
            $(".close").click(function(){
                $("#errorReport").hide();
            });
        });
    </script>

@endsection
@stop
