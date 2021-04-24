@extends('layouts.app')
@section('header')
<body>
@endsection 
@section('content')
    <!-- Created a parent div with class main-div -->
    <div class="main-div">
        <h1>
            <center> Diagnosis Input</center>
        </h1>
        <!-- Create a form  -->
        {{ html()->form('POST', route('updateData.post'))->open() }}
            <!-- Create a div with class row and inside this create two div with class col -->
            <div class="row">
                <div class="col">
                    <label class="control-label">定性指標No.</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="hidden" value = "{{$data[0]->id}}" name="id"/>
                        <input type="text" value = "{{$data[0]->qualitative_index}}" name="qualitative_index" placeholder="定性指標No." required />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">定性指標No. is required</span>
                    </div>
                </div>
                <div class="col">
                    <label class="control-label">大分類</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->big_category}}" name="big_category" placeholder="大分類" />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">大分類 is required</span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <label class="control-label">中分類</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->mid_category}}" name="mid_category" placeholder="中分類" />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">中分類 is required</span>
                    </div>
                </div>
                <div class="col">
                    <label class="control-label">小分類</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->small_category}}" name="small_category" placeholder="小分類" />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">小分類 is required</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <label class="control-label">DX推進指標</label>
                        <div class="field-control">
                            <input type="text" value = "{{$data[0]->promotion_title}}" name="promotion_title" placeholder="" />
                            <!-- Create a span tag with validation message. Initially it is display: none -->
                            <span style="display: none"> is required</span>
                        </div>

                    </div>
                    <div class="col">
                        <textarea style="width:100%; margin: 8px; height: 150px; resize: none;" type="text" name="promotion" placeholder="">{{$data[0]->promotion}}</textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label class="control-label">定性定量</label>
                    <!-- Custom radio input - first create a label and inside this create input type radio -->
                    <label class="radio-control">定性
                    <input type="radio" name="qual_quan" value="定性" {{ ($data[0]->qual_quan == "定性") ? 'checked' : ''}} />
                    <span></span>
                    </label>
                    <label class="radio-control">定量
                    <input type="radio" name="qual_quan" value="定量" {{ ($data[0]->qual_quan == "定量") ? 'checked' : ''}} />
                    <span></span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="control-label">現在</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->current}}" name="current" placeholder="現在" required />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">現在 is required</span>
                    </div>
                </div>
                <div class="col">
                    <label class="control-label">"目標</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->future}}" name="future" placeholder="目標(例えば3年後)" required />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">目標(例えば3年後) is required</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="control-label">なぜその...</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->reason}}" name="reason" placeholder="" required />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">This is required</span>
                    </div>
                </div>
                <div class="col">
                    <label class="control-label">アクション欄</label>
                    <!-- Create a field-control div for input field and validation message -->
                    <div class="field-control">
                        <input type="text" value = "{{$data[0]->action}}" name="action" placeholder="アクション欄(任意)" required />
                        <!-- Create a span tag with validation message. Initially it is display: none -->
                        <span style="display: none">アクション欄(任意) is required</span>
                    </div>
                </div>
            </div>

            <div class="row control">
                <div>
                    <input type="submit" value="保管" onclick="onSubmit()" />
                </div>
                <div style="margin-left: 10px">
                    <input type="button" value="キャンセル" />
                </div>
            </div>
        {{ html()->form()->close() }}
    </div>
@endsection
<script>
    /**
     * Bind onFieldBlur where you want show validation message
     */
    onFieldBlur = e => {
        // check field validity
        if (!e.checkValidity()) {
            e.nextElementSibling.style = {
                display: " block "
            };
            e.style.border = "solid 1px red ";
        } else {
            e.nextElementSibling.style.display = "none ";
            e.style.border = "solid 1px black ";
        }
    };
</script>

</html>