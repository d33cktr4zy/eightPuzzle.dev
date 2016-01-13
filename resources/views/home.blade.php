<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>*Puzzle Solver - By Gabriel Fermy</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <h1 class="text-center" style="display: block;">8Puzzle Solver</h1>
            <hr />
        </div>
    </div>
    @if($errors)
        <div class="container">
            <div class="row">
                <div class="well-lg alert-danger">
                    {!! $errors->first('failed') !!}
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            {!! Form::open(['role' => 'form', ]) !!}
            <form role="form">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-center">Start</h1>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="start[A1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 2)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[A2]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 1)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[A3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 8)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="start[B1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 4)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[B2]">
                                        <option value="0" selected>Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            <option value="{!! $i !!}">{!! $i !!}</option>
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[B3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 6)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="start[C1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 7)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[C2]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 5)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="start[C3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 3)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-center">Goal</h1>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="goal[A1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 1)
                                            <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                            <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[A2]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 2)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[A3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 3)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="goal[B1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 8)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[B2]">
                                        <option value="0" selected>Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            <option value="{!! $i !!}">{!! $i !!}</option>
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[B3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 4)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control input-lg" name="goal[C1]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 7)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[C2]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 6)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control input-lg" name="goal[C3]">
                                        <option value="0">Blank</option>
                                        @for($i = 1; $i < 9 ; $i++)
                                            @if($i == 5)
                                                <option value="{!! $i !!}" selected>{!! $i !!}</option>
                                            @else
                                                <option value="{!! $i !!}">{!! $i !!}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-block btn-warning btn-lg">FInd Solution</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
