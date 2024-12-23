"use strict";
// Class Definition
//Load Content Widget01
const _loadGrid = () => {
    let crudServiceBaseUrl = "https://demos.telerik.com/kendo-ui/service",
    dataSource = new kendo.data.DataSource({
        transport: {
            read:  {
                url: crudServiceBaseUrl + "/Products",
                dataType: "jsonp"
            },
            update: {
                url: crudServiceBaseUrl + "/Products/Update",
                dataType: "jsonp"
            },
            destroy: {
                url: crudServiceBaseUrl + "/Products/Destroy",
                dataType: "jsonp"
            },
            create: {
                url: crudServiceBaseUrl + "/Products/Create",
                dataType: "jsonp"
            },
            parameterMap: function(options, operation) {
                if (operation !== "read" && options.models) {
                    return {models: kendo.stringify(options.models)};
                }
            }
        },
        batch: true,
        pageSize: 20,
        schema: {
            model: {
                id: "ProductID",
                fields: {
                    ProductID: { editable: false, nullable: true },
                    ProductName: { validation: { required: true } },
                    UnitPrice: { type: "number", validation: { required: true, min: 1} },
                    Discontinued: { type: "boolean" },
                    UnitsInStock: { type: "number", validation: { min: 0, required: true } }
                }
            }
        }
    });

    $("#grid").kendoGrid({
        dataSource: dataSource,
        pageable: true,
        height: 550,
        toolbar: ["create"],
        columns: [
            "ProductName",
            { field: "UnitPrice", title: "Unit Price", format: "{0:c}", width: "120px" },
            { field: "UnitsInStock", title:"Units In Stock", width: "120px" },
            { field: "Discontinued", width: "120px" },
            { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }],
        editable: "inline"
    });
}
// Class Initialization
jQuery(document).ready(function() {
    _loadGrid();
});