$(function() {

	$("#jsGrid").jsGrid({
		width: "100%",
		height: "500px",
		filtering: true,
		editing: true,
		inserting: true,
		sorting: true,
		paging: true,
		autoload: true,
		pageSize: 15,
		pageButtonCount: 5,
		deleteConfirm: "Do you really want to delete the client?",
		controller: db,
		fields: [
			{
				name: "Name",
				type: "text",
				width: 150
			}, {
				name: "Age",
				type: "number",
				width: 50
			}, {
				name: "Address",
				type: "text",
				width: 200
			}, {
				name: "Country",
				type: "select",
				items: db.countries,
				valueField: "Id",
				textField: "Name"
			}, {
				name: "Married",
				type: "checkbox",
				title: "Is Married",
				sorting: false
			}, {
				type: "control"
			}
		]
	});

	var clients = [
		{
			"Name": "Otto Clay",
			"Age": 25,
			"Country": 1,
			"Address": "Ap #897-1459 Quam Avenue",
			"Married": false
		}, {
			"Name": "Connor Johnston",
			"Age": 45,
			"Country": 2,
			"Address": "Ap #370-4647 Dis Av.",
			"Married": true
		}, {
			"Name": "Lacey Hess",
			"Age": 29,
			"Country": 3,
			"Address": "Ap #365-8835 Integer St.",
			"Married": false
		}, {
			"Name": "Bella Rio",
			"Age": 20,
			"Country": 3,
			"Address": "Alps Bay, Integer St.",
			"Married": false
		}, {
			"Name": "Timothy Henson",
			"Age": 56,
			"Country": 1,
			"Address": "911-5143 Luctus Ave",
			"Married": true
		}, {
			"Name": "Regan Henson",
			"Age": 53,
			"Country": 1,
			"Address": "Luctus Ave",
			"Married": false
		}, {
			"Name": "Ramona Benton",
			"Age": 32,
			"Country": 3,
			"Address": "Ap #614-689 Vehicula Street",
			"Married": false
		}, {
			"Name": "Joyesh Kim",
			"Age": 12,
			"Country": 3,
			"Address": "Rio de jeneiro, Neo Street",
			"Married": false
		}
	];

	var countries = [
		{
			Name: "",
			Id: 0
		}, {
			Name: "United States",
			Id: 1
		}, {
			Name: "Canada",
			Id: 2
		}, {
			Name: "United Kingdom",
			Id: 3
		}
	];

	$("#jsGrid-simple").jsGrid({
		width: "100%",
		height: "400px",

		inserting: true,
		editing: true,
		sorting: true,
		paging: true,

		data: clients,

		fields: [
			{
				name: "Name",
				type: "text",
				width: 150,
				validate: "required"
			}, {
				name: "Age",
				type: "number",
				width: 50
			}, {
				name: "Address",
				type: "text",
				width: 200
			}, {
				name: "Country",
				type: "select",
				items: countries,
				valueField: "Id",
				textField: "Name"
			}, {
				name: "Married",
				type: "checkbox",
				title: "Is Married",
				sorting: false
			}, {
				type: "control"
			}
		]
	});

});
