<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="page-header">
                <h1>
                	MySql Queries
                </h1>
            </div>
            <blockquote>
                <p>
                	Query:<br/>
                	<strong>
                        SELECT c.*
                        FROM campaigns as c
                        LEFT JOIN advertisers as adv 
                        ON c.advertiser_id = adv.id and adv.id = 100
                        LEFT JOIN ads as a 
                        ON c.id = a.campaign_id GROUP BY c.id HAVING count(51) = 51
                    </strong>
                	<br/>
                </p> <small><cite>showing all campaigns of advertiser #100 that have more than 50 ads</cite></small>
                <hr/>
                <p>
                	Query:<br/>
                	<strong>
                		SELECT campaigns.*
                		FROM campaigns
                		JOIN ads ON ads.campaign_id = campaigns.id
                		GROUP BY campaigns.id HAVING count(0) = 0;
                	</strong>
                	<br/>
                </p> <small><cite>showing all campaigns that do not have any ads</cite></small>
            </blockquote>
        </div>
    </div>
</div>
</body>
</html>