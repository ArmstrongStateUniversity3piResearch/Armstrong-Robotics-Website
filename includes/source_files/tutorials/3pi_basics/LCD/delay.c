#include <pololu/3pi.h>

int main()
{
	print("Math:");
	lcd_goto_xy(0, 1);
	print("88 + 22");
	
	delay_ms(1000);
	clear();
	
	print_long(88 + 22);
	
	while(1);
}

