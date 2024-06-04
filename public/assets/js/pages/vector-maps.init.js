function getChartColorsArray(r){if(null!==document.getElementById(r)){var o=document.getElementById(r).getAttribute("data-colors");if(o)return(o=JSON.parse(o)).map(function(r){var o=r.replace(" ","");return-1===o.indexOf(",")?getComputedStyle(document.documentElement).getPropertyValue(o)||o:2==(r=r.split(",")).length?"rgba("+getComputedStyle(document.documentElement).getPropertyValue(r[0])+","+r[1]+")":o});console.warn("data-colors Attribute not found on:",r)}}var worldlinemap,worldemapmarkers,worldemapmarkersimage,usmap,canadamap,russiamap,spainmap,vectorMapWorldLineColors=getChartColorsArray("world-map-line-markers"),vectorMapWorldMarkersColors=(vectorMapWorldLineColors&&(worldlinemap=new jsVectorMap({map:"world_merc",selector:"#world-map-line-markers",zoomOnScroll:!1,zoomButtons:!1,markers:[{name:"Greenland",coords:[72,-42]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Brazil",coords:[-14.235,-51.9253]},{name:"Egypt",coords:[26.8206,30.8025]},{name:"Russia",coords:[61,105]},{name:"China",coords:[35.8617,104.1954]},{name:"United States",coords:[37.0902,-95.7129]},{name:"Norway",coords:[60.472024,8.468946]},{name:"Ukraine",coords:[48.379433,31.16558]}],lines:[{from:"Canada",to:"Egypt"},{from:"Russia",to:"Egypt"},{from:"Greenland",to:"Egypt"},{from:"Brazil",to:"Egypt"},{from:"United States",to:"Egypt"},{from:"China",to:"Egypt"},{from:"Norway",to:"Egypt"},{from:"Ukraine",to:"Egypt"}],regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapWorldLineColors,fillOpacity:1}},lineStyle:{animation:!0,strokeDasharray:"6 3 6"}})),getChartColorsArray("world-map-line-markers")),vectorMapWorldMarkersImageColors=(vectorMapWorldMarkersColors&&(worldemapmarkers=new jsVectorMap({map:"world_merc",selector:"#world-map-markers",zoomOnScroll:!1,zoomButtons:!1,selectedMarkers:[0,2],regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapWorldMarkersColors,fillOpacity:1}},markersSelectable:!0,markers:[{name:"Palestine",coords:[31.9474,35.2272]},{name:"Russia",coords:[61.524,105.3188]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Greenland",coords:[71.7069,-42.6043]}],markerStyle:{initial:{fill:"#038edc"},selected:{fill:"red"}},labels:{markers:{render:function(r){return r.name}}}})),getChartColorsArray("world-map-markers-image")),vectorMapUsaColors=(vectorMapWorldMarkersImageColors&&(worldemapmarkersimage=new jsVectorMap({map:"world_merc",selector:"#world-map-markers-image",zoomOnScroll:!1,zoomButtons:!1,regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapWorldMarkersImageColors,fillOpacity:1}},selectedMarkers:[0,2],markersSelectable:!0,markers:[{name:"Palestine",coords:[31.9474,35.2272]},{name:"Russia",coords:[61.524,105.3188]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Greenland",coords:[71.7069,-42.6043]}],markerStyle:{initial:{image:"./assets/images/logo-sm.png"}},labels:{markers:{render:function(r){return r.name}}}})),getChartColorsArray("usa-vectormap")),vectorMapCanadaColors=(vectorMapUsaColors&&(usmap=new jsVectorMap({map:"us_merc_en",selector:"#usa-vectormap",regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapUsaColors,fillOpacity:1}},zoomOnScroll:!1,zoomButtons:!1})),getChartColorsArray("canada-vectormap")),vectorMapRussiaColors=(vectorMapCanadaColors&&(canadamap=new jsVectorMap({map:"canada",selector:"#canada-vectormap",regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapCanadaColors,fillOpacity:1}},zoomOnScroll:!1,zoomButtons:!1})),getChartColorsArray("russia-vectormap")),vectorMapSpainColors=(vectorMapRussiaColors&&(russiamap=new jsVectorMap({map:"russia",selector:"#russia-vectormap",regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapRussiaColors,fillOpacity:1}},zoomOnScroll:!1,zoomButtons:!1})),getChartColorsArray("spain-vectormap"));vectorMapSpainColors&&(spainmap=new jsVectorMap({map:"spain",selector:"#spain-vectormap",regionStyle:{initial:{stroke:"#9599ad",strokeWidth:.25,fill:vectorMapSpainColors,fillOpacity:1}},zoomOnScroll:!1,zoomButtons:!1}));