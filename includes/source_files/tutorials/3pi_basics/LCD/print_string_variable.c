#include <pololu/3pi.h>

int main()
{
	char *welcome_line = "Hello";
	
	print(welcome_line);
	
	lcd_goto_xy(0, 1);
	
	print(welcome_line);
	
	while(1);
}

