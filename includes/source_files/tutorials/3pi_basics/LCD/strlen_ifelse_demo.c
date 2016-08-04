#include <pololu/3pi.h>

int main()
{
	char *welcome_line1 = "Hello and welcome";
	char *welcome_line2 = "Hello";
	char *too_long_line = "too long";
	
	if (strlen(welcome_line1) > 8)
		print(too_long_line);
	else
		print(welcome_line1);
		
	lcd_goto_xy(0, 1);
	
	if (strlen(welcome_line2) > 8)
		print(too_long_line);
	else
		print(welcome_line2);

	while(1);
}

