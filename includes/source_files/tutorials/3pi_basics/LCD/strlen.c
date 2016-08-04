#include <pololu/3pi.h>

int main()
{
	char *welcome_line = "Hello";
	
	print_long(strlen("Hello"));
	
	lcd_goto_xy(0, 1);
	
	print_long(strlen(welcome_line));
	
	while(1);
}

