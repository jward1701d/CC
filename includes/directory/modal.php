<div class="modal fade" id="d-modal" tabindex="-1" role="dialog" aria-labelledby="d-modal" aria-hidden="true">
   <div class="vertical-alignment-helper">-->
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content cc-listing">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 modal-listings">
                            <script id="template" type="text/x-handlebars-template">
                                
                                <h3><strong>{{company}}</strong></h3>
                                
                                {{#if contact}}
                                <p><strong>Contact Name: </strong>{{contact}}</p>
                                {{/if}}
                                
                                <p><strong>Address: </strong>{{address}}</p>
                                
                                <p><strong>City: </strong>{{city}}</p>
                                
                                {{#if state}}
                                <p><strong>State: </strong>{{state}}</p>
                                {{/if}}
                                
                                {{#if country}}
                                <p><strong>Country: </strong>{{country}}</p>
                                {{/if}}
                                
                                {{#if zip}}
                                <p><strong>Zip: </strong>{{zip}}</p>
                                {{/if}}
                                
                                {{#if phone1}}
                                <p><strong>Phone 1: </strong>{{phone1}}</p>
                                {{/if}}
                                {{#if phone2}}
                                <p><strong>Phone 2:</strong>{{phone2}}</p>
                                {{/if}}
                                 {{#if phone3}}
                                <p><strong>Phone 3:</strong>{{phone3}}</p>
                                {{/if}}
                                {{#if fax}}
                                <p><strong>Fax: </strong>{{fax}}</p>
                                {{/if}}
                                
                                {{#if emailaddress}}
                                <p><strong>Email: </strong><a href="mailto:{{emailaddress}}" target="_blank">{{emailaddress}}</a>
                                {{/if}}
                                
                                {{#if link}}
                                <p><strong>Website: </strong><a href="{{link}}" target="_blank">{{website}}</a></p>
                                {{/if}}
                                
                                
                                {{#if logo}}
                                <img class="d-logo" src="{{logo}}">
                                {{/if}}
                                
                                {{#if description}}
                                <p><strong>Business Description: </strong></br>{{description}}</p>
                                {{/if}}
                                
                            </div>
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  id="close-modal" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
                
                </div>
            </div>
        </div>
   </div>
</div>