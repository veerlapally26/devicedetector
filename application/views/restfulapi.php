<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1>
                	Restful API List
                </h1>
            </div>
            <blockquote>
                <p>
                	Url:<br/>
                	<strong>https://api.plista.com/dev/ads?adId=001232122244222</strong>
                	<br/>
                	Method:<br/>
                	<strong>GET</strong>
                </p> <small><cite>selecting a specific ad</cite></small>
                <hr/>
                <p>
                	Url:<br/>
                	<strong>https://api.plista.com/dev/campaigns?campaignId=00123212224&adId=all</strong>
                	<br/>
                	Method:<br/>
                	<strong>GET</strong>
                </p> <small><cite>selecting all ads of a specific campaign</cite></small>
                <hr/>
                <p>
                	Url:<br/>
                	<strong>https://api.plista.com/dev/advertisers/advertiserId=0023224424?campaignId=ALL&adId=all</strong>
                	<br/>
                	Method:<br/>
                	<strong>GET</strong>
                </p> <small><cite>selecting all ads of a specific advertiser</cite></small>
                <hr/>
                <p>
                	Url:<br/>
                	<strong>https://api.plista.com/dev/ads/createAd?data</strong>
                	<br/>
                	Method:<br/>
                	<strong>POST</strong>
                	<br/>
                	Request Body:<br/>
                	<strong>
                    	data: {
                          "title":"Sample Ad",
                          "text":"Sample Text for Ad",
                          "image":"img001.png",
                          "sponsoredBy":"Google",
                          "trackingUrl":"https://google.images/sample"
                        }
                    </strong>
                </p> 
                	<small><cite>creating an ad</cite></small>
                <hr/>
                <p>
                	Url:<br/>
                	<strong>https://api.plista.com/dev/ads/updateAd?data</strong>
                	<br/>
                	Method:<br/>
                	<strong>POST</strong>
                	<br/>
                	Request Body:<br/>
                	<strong>
                	data: {
                      "adId":"001212311",
                      "title":"Sample Ad Updated",
                      "text":"Sample Text for Ad Updated",
                      "image":"img001.png",
                      "sponsoredBy":"Google",
                      "trackingUrl":"https://google.images/sample"
                    }
                    </strong>
                </p> <small><cite>modifying a specific ad</cite></small>
            </blockquote>
        </div>
    </div>
</div>
</body>
</html>