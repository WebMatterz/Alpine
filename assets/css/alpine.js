function getCapitalOfCountry(){
	var list1 = document.getElementById('firstList');
	var list2 = document.getElementById('secondList');
    var list1SelectedValue = list1.options[list1.selectedIndex].value;

	if(list1SelectedValue=='gambia')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Banjul', 'Banjul');
	}
	else if(list1SelectedValue == 'ghana')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Accra', 'Accra');		
	}
	else if(list1SelectedValue == 'kenya')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Mombasa', 'Mombasa');		
		list2.options[2] = new Option('Nairobi1', 'Nairobi1');		
		list2.options[3] = new Option('Nairobi2', 'Nairobi2');		
	}	
	else if(list1SelectedValue == 'nigeria')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Abuja', 'Abuja');		
		list2.options[2] = new Option('Lagos', 'Lagos');		
	}
	else if(list1SelectedValue == 'rwanda')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Kigali', 'Kigali');				
	}
	else if(list1SelectedValue == 'seychelles')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Mahe', 'Mahe');				
		list2.options[2] = new Option('Praslin', 'Praslin');				
	}
	else if(list1SelectedValue == 'tanzania')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('DareSalam', 'DareSalam');				
		list2.options[2] = new Option('Zanzibar', 'Zanzibar');				
	}
	else if(list1SelectedValue == 'uganda')
	{
		list2.options.length=0;
		list2.options[0] = new Option('--Select--', '');
		list2.options[1] = new Option('Kampala', 'Kampala');				
	}

}