package jp.co.internous.action;

public class Test {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ
		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 20;
		taro.phoneNumber = "999999999";
		taro.address = "東京都";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.lunch();






		Person jiro = new Person();
		jiro.name = "木村次郎";
		jiro.age = 18;
		jiro.phoneNumber = "8888888888";
		jiro.address = "神奈川県";

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);
		jiro.lunch();






		Person hanako = new Person();
		hanako.name = "鈴木花子";
		hanako.age = 16;
		hanako.phoneNumber = "7777777777";
		hanako.address = "千葉県";

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.lunch();

		Robot aibo = new Robot();
		Robot asimo = new Robot();
		Robot pepper = new Robot();


		aibo.name="あいぼ";
		System.out.println(aibo.name);

		aibo.talk();
		aibo.walk();
		aibo.run();

		asimo.name="あしも";
		System.out.println(asimo.name);
		asimo.talk();
		asimo.walk();
		asimo.run();

		pepper.name="ぺっぱー";
		System.out.println(pepper.name);
		pepper.talk();
		pepper.walk();
		pepper.run();




	}

}
