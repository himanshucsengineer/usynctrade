<link rel="stylesheet" href="<?php echo base_url()?>assets/css/itrade.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>



<div class="itrade_top_section">
    <div class="container">
        <div class="flex_top">
            <div class="main_card">
                <input type="text" placeholder="Search Product e.g. Onion">
            </div>
            <div class="main_card">
                <select name="" id="">
                    <option value="">Select Source Country</option>
                </select>
            </div>
            <div class="main_card">
                <select name="" id="">
                    <option value="">Select Destination Country</option>
                </select>
            </div>
            <div class="main_card">
                <button>Search To World Market</button>
            </div>
        </div>
    </div>
</div>


<div class="itrade_main_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                    data-background-color="orange">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">News-Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Duties & Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Statics-Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Cost Calculation</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">Today's Trends</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content text-center">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is
                            the level that things could be at. So when you get something that has the name Kanye West on
                            it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a
                            company that ends up being worth billions of dollars, because I got the answers. I
                            understand culture. I am the nucleus.</p>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel">
                        <p> I will be the leader of a company that ends up being worth billions of dollars, because I
                            got the answers. I understand culture. I am the nucleus. I think that’s a responsibility
                            that I have, to push possibilities, to show people, this is the level that things could be
                            at. I think that’s a responsibility that I have, to push possibilities, to show people, this
                            is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="messages1" role="tabpanel">
                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is
                            the level that things could be at. So when you get something that has the name Kanye West on
                            it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a
                            company that ends up being worth billions of dollars, because I got the answers. I
                            understand culture. I am the nucleus.</p>
                    </div>
                    <div class="tab-pane" id="settings1" role="tabpanel">
                        <p>
                            "I will be the leader of a company that ends up being worth billions of dollars, because I
                            got the answers. I understand culture. I am the nucleus. I think that’s a responsibility
                            that I have, to push possibilities, to show people, this is the level that things could be
                            at."
                        </p>
                    </div>
					<div class="tab-pane" id="settings2" role="tabpanel">
                        <p>
                            "I will be the leader of a company that ends up being worth billions of dollars, because I
                            got the answers. I understand culture. I am the nucleus. I think that’s a responsibility
                            that I have, to push possibilities, to show people, this is the level that things could be
                            at."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>