@extends('template')
@section('content')

<!DOCTYPE html>
<html lang="en">
   <title>Add Question</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" src="/css/prolog.css">
   <style>
      body {font-size:16px;}
      .w3-bar-item:hover {
      text-decoration:none;
      /* border-right:5px solid #CC0F0F; */
      background-image: linear-gradient(to left,white,white,white,white,white,#CC0F0F);
      border-radius:5px;
      }
      .w3-bar-item {
      color:black;
      }
      .option{
      background-color: #b30000;
      color: white;
        }
   </style>

   <body>
   <div class="container" > 
   <div class="row justify-content-center">
   <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h4 class="card-title"><b>{{ __('Add Questions here') }}</b></h4></div>
                <div class="card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSub">Select Subject</label>
                    <select id="inputSub" class="form-control">
                    <option selected>Choose...</option>
                    <option>Computer Intelligence</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTopic">Topic</label>
                    <select id="inputTopic" class="form-control">
                    <option selected>Prolog</option>
                    <option>MP Neuron</option>
                    <option>PNN</option>
                    <option>BNN</option>
                    <option>CNN</option>
                    <option>Supervised NN Model</option>
                    <option>Fuzzy Sets</option>
                    <option>Fuzzy controller</option>
                    <option>De Morgan's Law</option>
                    <option>Simple Genetis Algorithm</option>
                    <option>ANFIS MATLAB</option>
                    </select>
                </div>
            </div>
            <div class="w3-section">
                    <label>Question</label>
                    <input class="w3-input w3-border" type="text" name="question" required>
                </div>
                <div class="form-row">
                <div class="w3-section form-group col-md-6">
                    <label>Option 1</label>
                    <input class="w3-input w3-border" type="text" name="opt1" required>
                </div>
                <div class="w3-section form-group col-md-6">
                    <label>Option 2</label>
                    <input class="w3-input w3-border" type="text" name="opt2" required>
                </div>
                </div>
                <div class="form-row">
                <div class="w3-section form-group col-md-6">
                    <label>Option 3</label>
                    <input class="w3-input w3-border" type="text" name="opt3">
                </div>
                <div class="w3-section form-group col-md-6">
                    <label>Option 4</label>
                    <input class="w3-input w3-border" type="text" name="opt4">
                </div>
                </div>
                <!--<div class="form-row">
                <div class="w3-section form-group col-md-6">
                    <label for="ansOpt">Enter the correct option number</label>
                    <select id="ansOpt" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    </select>
                </div>
                
                <div class="text-center w3-section form-group col-md-6">
                                <button type="submit" class="button" style="width: 200px; margin-top: 30px">
                                    {{ __('Add Qestion') }}
                                </button>
                            </div>
                            </div>-->
                            <div class="input-group" style="margin-top: 20px">
                            <select class="custom-select" id="inputGroupSelect">
                                <option selected>Choose the correct option...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <div class="input-group-append">
                                <button class="button" type="button" style="width: 300px;">{{ __('Add Qestion') }}</button>
                            </div>
                            </div>
                    
            </div>
            </form>
    </div>
    </div>
    </div>
    </div>
    </div>
   </body>
</html>
@endsection