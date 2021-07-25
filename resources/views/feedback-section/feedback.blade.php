 <head>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 </head>
 
 <!-- feedback -->
<div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="{{url('/comment')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="w3-section">
            <input type="hidden" name="Page" value="{{ Request::segment(1) }}">
            <input type="hidden" name="SubPage" value="{{Request::segment(2)}}">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="Email" required>
        </div>
        <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="comment" required>
        </div>
        <div class="g-recaptcha" data-sitekey="6LffVL0bAAAAANlqWVhn_cnMcMahfv-OLrvUjLBf"></div>
        <div class="space"></div>
        <input type="submit" style="width:200px;" value="Send Message" class="w3-block btn btn-outline-secondary w3-padding-large w3-margin-bottom">
    </form>       
</div>
<div class="w3-container" id="RecentFeedbacks" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Recent Feedbacks.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <div id="commentsSection"></div>
</div>

@section('bottom-js')
    <script type="text/javascript">
    $( document ).ready(function() {
        var dataObj = {};
        dataObj['page'] = '{{Request::segment(1)}}';
        dataObj['sub_page'] = "{{Request::segment(2)}}";
        $.ajax({
            type: "GET",
            url: "{{route('comments.list')}}",
            data: dataObj,
            success: function (data, status, xhr) {
                if(xhr.status == 200 && data?.comments) {
                    data.comments.forEach(comment => {
                        $('#commentsSection').append(`
                            <div class="card" id="feedbacklist">
                                <h2 class="card-header">${comment.Name}</h2>
                                <div class="card-body">
                                    <h5 class="card-title">${comment.comment}.</h5>
                                    <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="color:blue"></i></button>
                                    <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true" style="color:red"></i></button>
                                </div>
                            </div>    
                        `);
                    })
                    if(data.comments.length == 0) {
                        commentsSection.append(`
                            No Feedbacks
                        `);
                    }
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                if(xhr.status == 400) {
                    alert(`Error : ${JSON.stringify(xhr.responseJSON)}`);
                }
            }
        });
    })
    </script>
@endsection