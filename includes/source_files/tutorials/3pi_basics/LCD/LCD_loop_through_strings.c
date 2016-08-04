#include <pololu/3pi.h>

int main()
{
	// welcome line strings
	char *welcome_line1 = "LCD Loop";
	char *welcome_line2 = "Program";
	char *welcome_line3 = "is";
	char *welcome_line4 = "running";
	
	// display battery level until user presses b
	while(!button_is_pressed(BUTTON_B))
	{
		int bat = read_battery_millivolts();
		
		clear();
		print_long(bat);
		print("mV");
		lcd_goto_xy(0, 1);
		print("Press B");
		
		delay_ms(100);
	}
	wait_for_button_release(BUTTON_B); // wait until button is released to continue program
	delay_ms(1000);
	
	// display welcome lines infinitely
	while(1)
	{
		clear();
		
		print(welcome_line1);
		lcd_goto_xy(0, 1);
		print(welcome_line2);
		
		delay_ms(1000);
		clear();
		
		print(welcome_line3);
		lcd_goto_xy(0, 1);
		print(welcome_line4);
		
		delay_ms(1000);
	}
}

