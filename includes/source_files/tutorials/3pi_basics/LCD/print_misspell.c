#include <pololu/3pi.h>

int main()
{
	print("Hello");
	
	lcd_goto_xy(0, 1);
	
	print("Helo");
	
	while(1);
}

